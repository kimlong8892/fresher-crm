-- Make records uinque by combination of user_id, module and picklist
ALTER TABLE vtiger_kanbans 
ADD UNIQUE INDEX vtiger_kanbans_unique_key(user_id, module, picklist) USING HASH;

-- Populcate default data;
DELETE FROM vtiger_kanbans WHERE user_id = 1;
INSERT INTO vtiger_kanbans(user_id, module, picklist, params) VALUES (1, 'Accounts', 'rating', '{\"kanban_columns\":[\"Acquired\",\"Active\",\"Market Failed\",\"Project Cancelled\",\"Shutdown\"],\"item_fields\":[\"account_no\",\"accountname\",\"phone\",\"email1\",\"website\"],\"sorting_field\":\"created_time\",\"filter\":\"this_month\"}');
INSERT INTO vtiger_kanbans(user_id, module, picklist, params) VALUES (1, 'Contacts', 'leadsource', '{\"kanban_columns\":[\"Cold Call\",\"Existing Customer\",\"Self Generated\",\"Employee\",\"Partner\"],\"item_fields\":[\"contact_no\",\"lastname\",\"firstname\",\"salutationtype\",\"mobile\"],\"sorting_field\":\"created_time\",\"filter\":\"this_month\"}');
INSERT INTO vtiger_kanbans(user_id, module, picklist, params) VALUES (1, 'Leads', 'leadsource', '{\"kanban_columns\":[\"Cold Call\",\"Existing Customer\",\"Self Generated\",\"Employee\",\"Partner\"],\"item_fields\":[\"lead_no\",\"lastname\",\"firstname\",\"salutationtype\",\"mobile\"],\"sorting_field\":\"created_time\",\"filter\":\"this_month\"}');
INSERT INTO vtiger_kanbans(user_id, module, picklist, params) VALUES (1, 'Potentials', 'leadsource', '{\"kanban_columns\":[\"Cold Call\",\"Existing Customer\",\"Self Generated\",\"Employee\",\"Partner\"],\"item_fields\":[\"potential_no\",\"potentialname\",\"related_to\",\"amount\",\"closingdate\"],\"sorting_field\":\"created_time\",\"filter\":\"this_month\"}');