/**
 * Author: Phu Vo
 * Date: 2019.03.11
 * Last Update: 2019.04.17
 * Version: 1.0.2
 * Purpose: Vtiger Notification Controller
 * Require: JQuery, MomentJs, Vtiger app controller
 */

jQuery($ => {
    let Helper = {
        moduleName: 'CPNotifications',

        notifyIconMapping: {
            Default: '<i class="vicon-documents"></i>',
            Campaigns: '<i class="vicon-campaigns"></i>',
            Leads: '<i class="vicon-leads"></i>',
            Contacts: '<i class="vicon-contacts"></i>',
            Accounts: '<i class="vicon-accounts"></i>',
            Potentials: '<i class="vicon-potentials"></i>',
            HelpDesk: '<i class="vicon-helpdesk"></i>',
            Project: '<i class="vicon-project"></i>',
            Assets: '<i class="vicon-assets"></i>',
            ServiceContracts: '<i class="vicon-servicecontracts"></i>',
            Products: '<i class="vicon-products"></i>',
            Services: '<i class="vicon-services"></i>',
            PriceBooks: '<i class="vicon-pricebooks"></i>',
            Vendors: '<i class="vicon-vendors"></i>',
            Events: '<i class="vicon-calendar"></i>',
            Calendar: '<i class="vicon-task"></i>',
            Documents: '<i class="vicon-documents"></i>',
            ProjectTask: '<i class="vicon-projecttask"></i>',
            ProjectMilestone: '<i class="vicon-projectmilestone"></i>',
        },

        formatString: function(str, mapping) {
            if (!(mapping instanceof Object)) return str;
            if (!str) return "";

            for (let key in mapping) {
                let ex = `\\[${key}\\]`;
                str = str.replace(new RegExp(ex, 'g'), mapping[key]);
            }

            return str;
        },

        stripHtmlTags: function(str) {
            if ((str===null) || (str==='')) return '';
            
            str = str.toString();
            return str.replace(/<[^>]*>/g, '');
        },

        parseCreatedTime: function(timeString) {
            if (moment) {
                if (timeString) return moment(timeString).fromNow();
                return moment().fromNow();
            }
            
            return timeString || '';
        },

        getAvatar: function(data) {
            if (data.image) {
                return `<img class="avatar" src="${data.image}"/>`;
            } else 
            if (data.related_module_name === 'Calendar' && data.extra_data.activity_type !== 'Task') {
                return this.notifyIconMapping['Events'];
            } else {
                return this.notifyIconMapping[data.related_module_name] || this.notifyIconMapping['Default'];
            }
        },

        getNotifyIcon: function(data) {
            let i;
            
            if (data.related_module_name === 'Calendar' && data.extra_data.activity_type !== 'Task') {
                i = this.notifyIconMapping['Events'];
            }
            else {
                i = this.notifyIconMapping[data.related_module_name] || this.notifyIconMapping['Default'];
            }

            return $(i).attr('class');
        },

        request: function(params, callback, background) {
            let defaultParams = {
                module: this.moduleName,
                action: 'HandleAjax'
            };

            params = {...defaultParams, ...params};

            if (!background) app.helper.showProgress();

            app.request.post({ data: params }).then((err, res) => {
                app.helper.hideProgress();
                if (err && !background) this.notifyError(app.vtranslate('JS_THERE_WAS_SOMETHING_ERROR'));
                if (typeof callback === 'function') callback(err, res);
            });
        },

        notifyError: function(msg) {
            app.helper.showErrorNotification({ message: msg });
        },

        notifySuccess: function(msg) {
            app.helper.showSuccessNotification({ message: msg });
        },

        getListName: function(data) {
            return listName = data.subtype ? `${data.type}_${data.subtype}` : data.type;
        },

        getRelatedLink: function(itemData) {
            let { data } = itemData;

            // Added by Phu Vo 2019.08.01 to prevent empty related module notify
            if (!data.related_module_name || !data.related_record_id) return;
            // End prevent empty related module notify

            let extraData = data.extra_data;
            let link = `index.php?module=${data.related_module_name}&view=Detail&record=${data.related_record_id}`;
            let relatedInfo = window._RELATED_TABS_INFO;
            
            if (extraData.action === 'update') {
                let tabLabel = `${relatedInfo.modules[data.related_module_name]} ${relatedInfo.tabs.update}`;
                link += `&mode=showRecentActivities&page=1&tab_label=${tabLabel}`;
            }
            else if (data.related_module_name !== 'Calendar') {
                let tabLabel = `${relatedInfo.modules[data.related_module_name]} ${relatedInfo.tabs.detail}`;
                link += `&mode=showDetailViewByMode&requestMode=full&tab_label=${tabLabel}`;
            }

            return link;
        },
    }

    window.Notifications = new class {
        constructor() {
            this.vars = {
                element: document.getElementById('notification'),
                createdTimeUpdateTime: 60000,
                maxInappNotify: 4,
            };

            this.helper = Helper; // public helper vie Notifications object

            this.cache = {};

            this.inappNotify = {
                index: 0,
                list: {}
            }

            this.initActiveTab();

            this.loadNotificationPopoverPanel();
            this.loadNotificationTabs();
            this.loadDomEvents();
            this.loadInitData();
            this.loadCreatedTimeUpdater();
        }

        getPopupContainer() {
            if (this.cache.popupContainer) return this.cache.popupContainer;
            return this.cache.popupContainer = $(this.vars.element).find('#notifications_poup-container');
        }

        _createItem(itemData, listName) {
            itemData = itemData || {};
            let {data} = itemData || {};
            let template = $(this.vars.element).find('div#notification_templates div.notify-item').clone();

            //process
            template.attr({
                'title': Helper.stripHtmlTags(itemData.message),
                'data-id': itemData.data.id,
            });

            template.on('click', () => {
                let relatedLink = Helper.getRelatedLink(itemData);
                if (relatedLink) window.open(Helper.getRelatedLink(itemData));
            });

            template.find('.avatar-container').html(Helper.getAvatar(data, listName));
            template.find('.notify-item_message').html(itemData.message);

            return template;
        }

        createItem(itemData, listName) {
            itemData = itemData || {};
            let item = this._createItem(itemData, listName);

            if (listName === 'notification') {
                // read status handle
                item.attr({
                    'data-read': itemData.data.read,
                });

                item.find('.notify-item_createdtime').attr('data-value', itemData.data.created_time).html(Helper.parseCreatedTime(itemData.data.created_time));

                item.on('click', () => {
                    // mark as read
                    this.markAsRead(itemData.data.id);
                });
            }
            else { // remind item
                item.addClass('single'); // vertical align middle
                item.find('.notify-item_createdtime').remove();
            }

            return item;
        }

        createPopup(popupData) {
            popupData = popupData || {};
            let {data} = popupData || {};
            let template = $(this.vars.element).find('div#notification_templates div.notify-popup').clone();

            let getContentRows = extraData => {
                if ( !(extraData instanceof Object)) return "";
                let content = $([]);

                for (let field in extraData) {
                    let row =  $('<div class="row clearfix"></div>');
                    row.append($(`<div class="notify-popup_field-value col-sm-12">${extraData[field]}</div>`));
                    content = content.add(row);
                }
                
                return content;
            }

            // process data
            template.attr({
                'data-type': 'notify_popup',
                'data-id': popupData.data.id,
            });

            // process content
            template.find('.notify-popup_title-content').html(popupData.message);
            template.find('.notify-popup_content').append(getContentRows(data.extra_data));

            // add event listers
            template.find('.cancelLink').on('click', function() {
                // dimiss
                template.remove();
            });

            template.find('form[name="notify_popup"]').on('submit', function(e) {
                e.preventDefault();
                // submit => go to related record
                window.open(`index.php?module=${data.related_module_name}&view=Detail&record=${data.related_record_id}`, '_blank');
                // dimiss
                template.remove();
            });

            return template;
        }

        markAsRead(id) {
            let params = {
                mode: 'markAsRead',
                notification_id: id,
            }

            Helper.request(params, (err, res) => {
                if (res && id === 'all') {
                    let item = this.cache.notificationPopover.find('div.notify-item').attr({'data-read': 1});
                    let listName = 'notification';

                    this._updateCounter({
                        total: this._getCounter('total') - this._getCounter(listName),
                        [listName]: 0,
                    });

                    this.removeInappNotify('all');

                    return;
                }

                if (res) {
                    let item = this.cache.notificationPopover.find(`div.notify-item[data-id=${id}]`).attr({'data-read': 1});
                    let listName = item.closest('.notification_list').attr('rel');
                    
                    // Update Counter
                    this._updateCounter({
                        total: this._getCounter('total') - 1,
                        [listName]: this._getCounter(listName) - 1,
                    });
                }
            }, true);
        }

        initActiveTab() {
            let activeTab = $(this.vars.element).find('.nav-item[data-group="notify-navs"]:first-child').addClass('active');
            $(this.vars.element).find(activeTab.data('for')).addClass('active');
        }

        loadInitData() {
            this.loadNotificationCounts();
        }

        loadNotificationCounts() {
            let params = {
                mode: 'getNotificationCounts',
            }

            let callback = (err, res) => {
                if (res && res.counts) {
                    this.updateCounter(res.counts);
                }
            }

            Helper.request(params, callback, true);
        }

        loadNotificationPopoverPanel() {
            let self = this;
            this.cache.notificationPopoverTrigger = $(this.vars.element).find("a#notification_popover-tigger");
            this.cache.notificationPopover = $(this.vars.element).find(this.cache.notificationPopoverTrigger.data('for'));

            this.cache.notificationPopoverTrigger.on('click', () => {
                this.cache.notificationPopover.toggle({
                    duration: 0,
                    complete: () => self.notificationInitList()
                });
            });

            // init event to close popover
            $('body').on('click', e => {
                if (
                    e.target.data !== this.vars.element.id &&
                    $(e.target).parents(`#${this.vars.element.id}`).length === 0 &&
                    $(e.target).parents('div.popover.in').length === 0
                ) this.cache.notificationPopover.hide();
            });
        }

        notificationInitList() {
            let self = this;
            if (this.cache.notificationPopover.is(':visible')) {
                let activeList = this.cache.notificationPopover.find('div.notification_list:visible');

                if (activeList.length > 0) {
                    // select with class return list jquery ui
                    activeList.each(function() {
                        let target = $(this);
                        let list = target.find('div.notification_items');
                        let offset = target.data('offset');
                        if (offset == 0) { 
                            // emptylist
                            list.html('');
                            self.loadList(target.data('tab'), target.data('sub'), offset);
                        }
                    });
                }
            }
        }

        loadNotificationTabs() {
            self = this;

            if (this.cache.notificationPopover) {
                let navItem = this.cache.notificationPopover.find('.nav-item');
                navItem.on('click', function(e) {
                    let loading = false;
                    let target = $(this);
                    let group = target.data('group');
                    let navItem = self.cache.notificationPopover.find(`.nav-item[data-group="${group}"]`);
                    let tabPane = self.cache.notificationPopover.find(`.notify-tab-pane[rel="${group}"]`);
                    let targetTabPane = self.cache.notificationPopover.find(target.data('for'));

                    // pre process => reload list on display
                    if (targetTabPane.hasClass('active')) {
                        loading = true;
                        self.notificationReloadList(targetTabPane.data('tab'), targetTabPane.data('sub', 0));
                    }

                    // process nav item
                    navItem.removeClass('active');
                    target.addClass('active');

                    // process tab pane
                    tabPane.removeClass('active');
                    targetTabPane.addClass('active');

                    if (!loading) self.notificationInitList();
                });
            }
        }

        loadDomEvents() {
            this.loadListScrollEvent();
        }

        loadListScrollEvent() {
            let self = this;
            $(this.vars.element).find('div.notification_list').on('scroll', function(e) {
                var elem = $(e.target);
                if ((elem.scrollTop() + elem.height() >= elem[0].scrollHeight) && (elem.data('offset') > 0 || elem.data('offset') == 0)) {
                    self.loadList(elem.data('tab'), elem.data('sub'), elem.data('offset'));
                }
            });
        }
        
        loadCreatedTimeUpdater() {
            this.unloadCreatedTimeUpdater();

            if (this.vars.createdTimeUpdateTime) this.cache.createTimeUpdater = setInterval(() => {
                $('.notify-item_createdtime').each(function() {
                    let createdTime = $(this)
                    let value = createdTime.data('value');
                    let createdTimeValue = Helper.parseCreatedTime(value);

                    createdTime.html(createdTimeValue);
                });
            }, this.vars.createdTimeUpdateTime);
        }

        unloadCreatedTimeUpdater() {
            if (this.cache.createTimeUpdater) {
                clearInterval(this.cache.createTimeUpdater);
                delete this.cache.createTimeUpdater;
            }
        }

        notificationReloadList() {
            let self = this;
            if (this.cache.notificationPopover.is(':visible')) {
                let activeList = this.cache.notificationPopover.find('div.notification_list:visible');

                if (activeList.length > 0) {
                    // select with class return list jquery ui
                    activeList.each(function() {
                        let target = $(this);
                        let preLoadCb = (listName, res) => {
                            let items = target.find('div.notification_items');
                            items.html('');
                        }

                        self.loadList(target.data('tab'), target.data('sub'), 0, preLoadCb);
                    });
                }
            }
        }

        loadList(tab, sub = '', offset, preLoadCb) {
            if (!offset && offset != 0) return;

            let listName = sub ? `${tab}_${sub}` : tab;
            let listUi = $(this.vars.element).find(`div.notification_list[rel="${listName}"]`);

            // offset = offset || 0;

            let params = {
                mode: 'loadData',
                type: tab,
                sub_type: sub,
                offset: offset,
            };

            if (typeof preLoadCb === 'function') preLoadCb(listName);

            // create loader ui
            listUi.attr('data-status', 'loading').scrollTop(listUi[0].scrollHeight);

            Helper.request(params, (err, res) => {
                if (res === 'Invalid request') location.reload();

                if (!res || !res.data || res.data.length === 0) {
                    listUi.attr('data-status', 'empty');
                }
                else {
                    listUi.attr('data-status', '');
                }

                // if (typeof preRenderCb === 'function') preRenderCb(listName, res);

                this.renderList(listName, res);
            }, true);
        }

        renderList(listName, data, callback = '') {
            data = data || {};
            let items = data.data || [];
            let list = $(this.vars.element).find(`div.notification_list[rel="${listName}"]`);
            let newList = $([]);

            items.forEach(item => {
                newList = newList.add(this.createItem(item, listName));
            });

            list.attr('data-offset', data.next_offset).data('offset', data.next_offset);
            list.find('div.notification_items').append(newList);

            if (data.counts) this.updateCounter(data.counts);

            if (typeof callback === 'function') callback();
        }

        updateCounter(params) {
            let adapter = {
                parseDetails: params => {
                    for (let key in params) {
                        if (key.indexOf('_detail') > -1) {
                            for (let detail in params[key]) {
                                params[key.replace('detail', detail)] = params[key][detail];
                            }

                            delete params[key];
                        }
                    }

                    return params;
                }
            }

            this._updateCounter(adapter.parseDetails(params));
        }

        _selectCounter(counterName) {
            let selectorMapping = {
                total: 'div#notification_counter',
                notification: 'div#notification_counter-notify',
                activity: 'div#notification_counter-task',
                birthday: 'div#notification_counter-birthday',
                activity_coming: 'span#notification_counter-activity-coming',
                activity_overdue: 'span#notification_counter-activity-overdue',
                birthday_today: 'span#notification_counter-birthday-today',
                birthday_coming: 'span#notification_counter-birthday-coming',
            }

            return selectorMapping[counterName] ? $(this.vars.element).find(selectorMapping[counterName]) : $();
        }

        _getCounter(counterName) {
            return Number(this._selectCounter(counterName).html()) || 0;
        }

        _setCounter(counterName, value) {
            value = Number(value);

            this._selectCounter(counterName).html(value).toggle(value > 0);

            return value;
        }

        _updateCounter(params) {
            Object.keys(params).forEach(key => {
                if (this._selectCounter(key) && Number(params[key]) > -1) {
                    this._setCounter(key, params[key]);
                }
            });
        }

        insert(item) {
            let list = $([]);
            let {data} = item;
            let listName = data.subtype ? `${data.type}_${data.subtype}` : data.type;

            // assign default value
            data = {...data, ...{read: 0}};
            item.data = data;

            list = list.add(this.createItem(item, listName));

            // Append new item
            $(this.vars.element).find(`div.notification_list[rel="${listName}"] div.notification_items`).prepend(list);

            // Update list UI
            let listUi = $(this.vars.element).find(`div.notification_list[rel="${listName}"]`);
            listUi.attr('data-status', '');

            // Update Counter
            this._updateCounter({
                total: this._getCounter('total') + 1,
                [listName]: this._getCounter(listName) + 1,
            });
            
            this.openInAppNotify(item);
        }

        remove(id) {
            this.cache.notificationPopover.find(`div.notify-item[data-id=${id}]`).remove();
        }

        openPopup(props) {
            let popup = this.createPopup(props);
            //
            this.getPopupContainer().append(popup);
        }

        getInappNotifyCount() {
            return $('.notification_inapp-notify').length;
        }

        removeInappNotify(index) {
            if (index === 'all') {
                for (let index in this.inappNotify.list) {
                    this.inappNotify.list[index].close();
                }

                this.inappNotify.index = 0;
                this.inappNotify.list = {};

                return;
            }

            if (this.inappNotify.list[index]) this.inappNotify.list[index].close();
            // delete this.inappNotify.list[index];
            return this;
        }

        _openInAppNotify(itemData, settings) {
            let self = this;
            let { data } = itemData;
            settings = settings || {};

            let options = {
                icon: Helper.getNotifyIcon(data),
                title: app.vtranslate('JS_CPNOTIFICATIONS'),
                message: itemData.message,
                url: Helper.getRelatedLink(itemData),
                target: '_blank'
            };

            // Onshow events
            settings.onShow = function() {
                $(this).addClass('notification_inapp-notify');

                $(this).find('[data-notify="message"]').attr('title', itemData.message); // Bug #258: Modified by Phu Vo to add title to message container

                if (typeof settings.postShowCb === 'function') settings.postShowCb($(this));
            }

            // Assign settings with default
            settings = {
                ...{
                    delay: 0,
                    animate: {
                        enter: null,
                        exit: null,
                    },
                    // newest_on_top: true,
                    onClose: function() {
                        delete self.inappNotify.list[this.data('index')];
                    }
                },
                ... settings
            }

            // Show notify, assign to storage with auto increase index
            let notify = this.inappNotify.list[this.inappNotify.index] = $.notify(options, settings);

            // Add external data
            notify.$ele.data('index', this.inappNotify.index);

            // Add event listener
            notify.$ele.on('click', function(event) {
                if (typeof settings.onClick === 'function') settings.onClick(event, $(this));
                notify.close();
            });

            // Increase inappNotify index by 1
            this.inappNotify.index ++;

            return this;
        }

        openInAppNotify(itemData, settings) {
            settings = settings || {};

            // Check inapp notify quantity
            if (this.getInappNotifyCount() >= this.vars.maxInappNotify) {
                // Assign settings with default
                settings.onShown = () => {
                    this.removeInappNotify(Math.min(...Object.keys(this.inappNotify.list)));
                }
            }

            settings.onClick = (event, data) => {
                let target = $(event.target);

                // Mark notification as read on click
                if (itemData.data.id && !target.is('button.close')) {
                    this.markAsRead(itemData.data.id);
                }
            }

            return this._openInAppNotify(itemData, settings);
        }

        updateNotification(params) {
            if (params.counter) this.updateCounter(params.counter);
            if (params.insert) this.insert(params.insert);
            if (params.remove) this.remove(params.remove);
        }
    }
});