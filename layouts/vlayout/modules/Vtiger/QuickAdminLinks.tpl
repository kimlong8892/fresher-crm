{*
    QuickAdminLinks.tpl
    Author: Hieu Nguyen
    Date: 2018-06-28
    Purpose: to show useful quick links for admin
    Usage: add new links in the smarty style here
*}

{strip}
    <li class="dropdown">
        <div style="margin-top: 15px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                <i class="fa fa-cog" aria-hidden="true" title="Quick Admin Links"></i>
            </a>
            <div style="width: 250px; padding: 10px" class="dropdown-menu" role="menu">
                <div>
                    <i class="fa fa-refresh" aria-hidden="true" title="Quick Admin Links"></i>
                    <a href="index.php?module=Vtiger&action=QuickRepair">{vtranslate('LBL_ADMIN_QUICK_REPAIR', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <a href="index.php?module=Vtiger&parent=Settings&view=Index">{vtranslate('LBL_ADMIN_SETTINGS', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1">{vtranslate('LBL_ADMIN_USERS_MANAGEMENT', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <a href="index.php?module=Groups&parent=Settings&view=List&block=1&fieldid=4">{vtranslate('LBL_ADMIN_GROUPS_MANAGEMENT', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <a href="index.php?module=Roles&parent=Settings&view=Index&block=1&fieldid=2">{vtranslate('LBL_ADMIN_ROLES_MANAGEMENT', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <a href="index.php?module=Profiles&parent=Settings&view=List&block=1&fieldid=3">{vtranslate('LBL_ADMIN_PERMISSIONS_MANAGEMENT', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <a href="index.php?module=ModuleManager&parent=Settings&view=List&block=5&fieldid=8">{vtranslate('LBL_ADMIN_MODULES_MANAGEMENT', $MODULE)}</a>
                </div>
                <hr style="margin: 10px 0 !important">
                <div>
                    <i class="fa fa-edit" aria-hidden="true"></i>
                    <a href="index.php?parent=Settings&module=Picklist&view=Index&block=8&fieldid=9">{vtranslate('LBL_ADMIN_DROPDOWN_EDITOR', $MODULE)}</a>
                </div>
            </div>
        </div>
    </li>
{/strip}