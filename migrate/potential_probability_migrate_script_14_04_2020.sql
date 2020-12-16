-- ----------------------------
-- Values for potential failed reason
-- ----------------------------
ALTER TABLE vtiger_potential MODIFY probability VARCHAR(3);
UPDATE vtiger_potential SET probability = SUBSTRING_INDEX(probability, '.', 1);