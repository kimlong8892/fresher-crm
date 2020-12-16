-- ----------------------------
-- New mautic cron
-- ----------------------------
SET @cronMaxId = (SELECT max(id) FROM vtiger_cron_task);

INSERT INTO vtiger_cron_task (id, name, handler_file, frequency, laststart, lastend, status, module, sequence, description) VALUES (@cronMaxId + 1, 'SyncMauticHistoryForConvertedLead', 'cron/modules/CPMauticIntegration/SyncMauticHistoryForConvertedLead.php', '300', NULL, NULL, '1', 'CPMauticIntegration', @cronMaxId + 1, 'Recommended frequency for task SyncMauticHistoryForConvertedLead is 5 mins');

-- ----------------------------
-- Update scheduler
-- ----------------------------
UPDATE vtiger_cron_task SET handler_file = 'cron/modules/CPMauticIntegration/SyncToMautic.php' WHERE name = 'SyncToMauticTask';

-- ----------------------------
-- Add params column for mautic queue
-- ----------------------------
ALTER TABLE  vtiger_mautic_sync_queue ADD COLUMN params TEXT;

-- ----------------------------
-- Add params column for mautic queue
-- ----------------------------
ALTER TABLE  vtiger_mautic_sync_queue ADD COLUMN action varchar(50);

-- ----------------------------
-- New mautic cron
-- ----------------------------
INSERT INTO vtiger_cron_task (id, name, handler_file, frequency, laststart, lastend, status, module, sequence, description) VALUES (@cronMaxId + 2, 'PullMauticContactHistory', 'cron/modules/CPMauticIntegration/PullContactHistory.php', '900', '0', '0', '1', 'CPMauticIntegration', @cronMaxId + 2, 'Recommended frequency for task PullMauticHistory is 15 mins');

-- ----------------------------
-- New mautic history type value
-- ----------------------------
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('1', 'asset.download', '0', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('2', 'campaign.event', '1', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('3', 'campaign.event.scheduled', '2', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('4', 'campaign_membership', '3', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('5', 'lead.source.created', '4', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('6', 'lead.source.identified', '5', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('7', 'lead.donotcontact', '6', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('8', 'email.failed', '7', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('9', 'email.read', '8', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('10', 'email.replied', '9', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('11', 'email.sent', '10', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('12', 'form.submitted', '11', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('13', 'lead.imported', '12', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('14', 'message.queue', '13', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('15', 'page.hit', '14', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('16', 'point.gained', '15', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('17', 'segment_membership', '16', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('18', 'stage.changed', '17', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('19', 'sms_reply', '18', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('20', 'lead.utmtagsadded', '19', '1', NULL);
INSERT INTO vtiger_cpmauticcontacthistory_type (cpmauticcontacthistory_typeid, cpmauticcontacthistory_type, sortorderid, presence, color) VALUES ('21', 'page.videohit', '20', '1', NULL);

UPDATE vtiger_cpmauticcontacthistory_type_seq SET id = '21';
