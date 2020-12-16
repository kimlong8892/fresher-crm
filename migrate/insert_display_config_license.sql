INSERT INTO `vtiger_settings_field`(`fieldid`, `blockid`, `name`, `iconpath`, `description`, `linkto`, `sequence`, `active`, `pinned`, `allow_non_admin`) VALUES (47, 4, 'LBL_LICENSE_SYSTEM', 'NULL', 'NULL', 'index.php?module=Vtiger&parent=Settings&view=ShowLicense', 13, 0, 0, 0);
UPDATE `vtiger_settings_field_seq` SET `id` = (SELECT MAX(fieldid) FROM `vtiger_settings_field`)


INSERT INTO `vtiger_cron_task`(`name`, `handler_file`, `frequency`, `laststart`, `lastend`, `status`, `module`, `sequence`, `description`) VALUES ('CheckLicense', 'cron/modules/Vtiger/CheckLicense.service', 120, NULL, NULL, 1, 'Vtiger', 17, NULL);