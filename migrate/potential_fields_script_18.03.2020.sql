-- ----------------------------
-- Update probability field
-- ----------------------------
UPDATE vtiger_field SET uitype='15', typeofdata='V~M' WHERE fieldid = '120';

-- ----------------------------
-- Add dropdown tables for probability
-- ----------------------------
DROP TABLE IF EXISTS `vtiger_probability`;
CREATE TABLE `vtiger_probability` (
  `probabilityid` int(19) NOT NULL,
  `probability` varchar(255) DEFAULT NULL,
  `presence` int(1) DEFAULT NULL,
  `picklist_valueid` int(19) DEFAULT NULL,
  `sortorderid` int(11) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`probabilityid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vtiger_probability` VALUES ('1', '10', '1', '150', '0', '');
INSERT INTO `vtiger_probability` VALUES ('2', '20', '1', '151', '1', '');
INSERT INTO `vtiger_probability` VALUES ('3', '30', '1', '152', '2', '');
INSERT INTO `vtiger_probability` VALUES ('4', '40', '1', '153', '3', '');
INSERT INTO `vtiger_probability` VALUES ('5', '50', '1', '154', '4', '');
INSERT INTO `vtiger_probability` VALUES ('6', '60', '1', '155', '5', '');
INSERT INTO `vtiger_probability` VALUES ('7', '70', '1', '156', '6', '');
INSERT INTO `vtiger_probability` VALUES ('8', '80', '1', '157', '7', '');
INSERT INTO `vtiger_probability` VALUES ('9', '100', '0', '158', '8', '');
INSERT INTO `vtiger_probability` VALUES ('10', '0', '0', '159', '9', '');

DROP TABLE IF EXISTS `vtiger_probability_seq`;
CREATE TABLE `vtiger_probability_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vtiger_probability_seq` VALUES ('10');

-- ----------------------------
-- Add dependancy for sales_tage and probability
-- ----------------------------
SET @maxDependancyId = (SELECT id FROM vtiger_picklist_dependency_seq LIMIT 1);

INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 1, '2', 'sales_stage', 'probability', 'Prospecting', '[\"10\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 2, '2', 'sales_stage', 'probability', 'Qualification', '[\"20\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 3, '2', 'sales_stage', 'probability', 'Needs Analysis', '[\"30\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 4, '2', 'sales_stage', 'probability', 'Value Proposition', '[\"40\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 5, '2', 'sales_stage', 'probability', 'Id. Decision Makers', '[\"50\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 6, '2', 'sales_stage', 'probability', 'Perception Analysis', '[\"60\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 7, '2', 'sales_stage', 'probability', 'Proposal or Price Quote', '[\"70\"]', NULL);
INSERT INTO vtiger_picklist_dependency (id, tabid, sourcefield, targetfield, sourcevalue, targetvalues, criteria) VALUES (@maxDependancyId + 8, '2', 'sales_stage', 'probability', 'Negotiation or Review', '[\"80\"]', NULL);

UPDATE vtiger_picklist_dependency_seq SET id = @maxDependancyId + 8;

-- ----------------------------
-- Remove sale stage 2 last values
-- ----------------------------
DELETE FROM vtiger_sales_stage WHERE sales_stage IN ('Closed Won', 'Closed Lost');

-- ----------------------------
-- Values for potential result
-- ----------------------------
INSERT INTO vtiger_potentialresult (potentialresultid, potentialresult, presence, picklist_valueid, sortorderid, color) VALUES ('1', 'Closed Won', '1', '131', '1', NULL);
INSERT INTO vtiger_potentialresult (potentialresultid, potentialresult, presence, picklist_valueid, sortorderid, color) VALUES ('2', 'Closed Lost', '1', '132', '2', NULL);

UPDATE vtiger_potentialresult_seq SET id = 2;

-- ----------------------------
-- Values for potential failed reason
-- ----------------------------
INSERT INTO vtiger_potentiallostreason (potentiallostreasonid, potentiallostreason, presence, picklist_valueid, sortorderid, color) VALUES ('1', 'price_higher_than_budget', '1', '133', '1', NULL);
INSERT INTO vtiger_potentiallostreason (potentiallostreasonid, potentiallostreason, presence, picklist_valueid, sortorderid, color) VALUES ('2', 'poor_features', '1', '134', '2', NULL);
INSERT INTO vtiger_potentiallostreason (potentiallostreasonid, potentiallostreason, presence, picklist_valueid, sortorderid, color) VALUES ('3', 'unfriendly_ui_ux', '1', '135', '3', NULL);
INSERT INTO vtiger_potentiallostreason (potentiallostreasonid, potentiallostreason, presence, picklist_valueid, sortorderid, color) VALUES ('4', 'customer_has_no_plan', '1', '136', '4', NULL);
INSERT INTO vtiger_potentiallostreason (potentiallostreasonid, potentiallostreason, presence, picklist_valueid, sortorderid, color) VALUES ('5', 'customer_selected_another_partner', '1', '137', '5', NULL);
INSERT INTO vtiger_potentiallostreason (potentiallostreasonid, potentiallostreason, presence, picklist_valueid, sortorderid, color) VALUES ('6', 'requirement_not_suite_with_crm', '1', '138', '6', NULL);

UPDATE vtiger_potentiallostreason_seq SET id = 6;