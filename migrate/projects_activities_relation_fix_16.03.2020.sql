INSERT INTO vtiger_ws_referencetype(fieldtypeid, type) VALUES (34, 'Project');
INSERT INTO vtiger_fieldmodulerel(fieldid, module, relmodule, status, sequence) VALUES (238, 'Project', 'Calendar', NULL, NULL);
UPDATE vtiger_relatedlists SET name = 'get_activities', relationfieldid = 238, relationtype = '1:N' WHERE relation_id = 168;