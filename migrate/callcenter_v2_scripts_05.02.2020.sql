SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for vtiger_events_call_purpose
-- ----------------------------
DROP TABLE IF EXISTS vtiger_events_call_purpose;
CREATE TABLE vtiger_events_call_purpose  (
  events_call_purposeid int(11) NOT NULL AUTO_INCREMENT,
  events_call_purpose varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  sortorderid int(11) NULL DEFAULT NULL,
  presence int(11) NOT NULL DEFAULT 1,
  color varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (events_call_purposeid) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_call_purpose
-- ----------------------------
INSERT INTO vtiger_events_call_purpose VALUES (1, 'call_purpose_marketing', 0, 1, NULL);
INSERT INTO vtiger_events_call_purpose VALUES (2, 'call_purpose_consulting', 1, 1, NULL);
INSERT INTO vtiger_events_call_purpose VALUES (3, 'call_purpose_process_feedback', 2, 1, NULL);
INSERT INTO vtiger_events_call_purpose VALUES (4, 'call_purpose_other', 3, 1, NULL);

-- ----------------------------
-- Table structure for vtiger_events_call_purpose_seq
-- ----------------------------
DROP TABLE IF EXISTS vtiger_events_call_purpose_seq;
CREATE TABLE vtiger_events_call_purpose_seq  (
  id int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_call_purpose_seq
-- ----------------------------
INSERT INTO vtiger_events_call_purpose_seq VALUES (4);

-- ----------------------------
-- Table structure for vtiger_events_call_result
-- ----------------------------
DROP TABLE IF EXISTS vtiger_events_call_result;
CREATE TABLE vtiger_events_call_result  (
  events_call_resultid int(11) NOT NULL AUTO_INCREMENT,
  events_call_result varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  sortorderid int(11) NULL DEFAULT NULL,
  presence int(11) NOT NULL DEFAULT 1,
  color varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (events_call_resultid) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_call_result
-- ----------------------------
INSERT INTO vtiger_events_call_result VALUES (1, 'call_result_call_back_later', 0, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (2, 'call_result_customer_interested', 1, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (3, 'call_result_wrong_number', 2, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (4, 'call_result_called_back', 3, 1, NULL);

-- ----------------------------
-- Table structure for vtiger_events_call_result_seq
-- ----------------------------
DROP TABLE IF EXISTS vtiger_events_call_result_seq;
CREATE TABLE vtiger_events_call_result_seq  (
  id int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_call_result_seq
-- ----------------------------
INSERT INTO vtiger_events_call_result_seq VALUES (3);

-- Create new email template for faq email
DELETE FROM vtiger_emailtemplates WHERE templatename = 'Faq Email' AND systemtemplate = 1;
INSERT INTO vtiger_emailtemplates(foldername, templatename, templatepath, subject, description, body, deleted, systemtemplate, module) VALUES (NULL, 'Faq Email', NULL, 'Faq - %question', 'Faq Email sent from call popup feature', '\n<p>Xin chào quý khách,<br />\n<br />\nXin cám ơn về câu hỏi của bạn. Chúng tôi xin giải đáp thắc mắc của bạn như sau:</p>\n\n<table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;border-collapse:collapse;\">\n	<tbody>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Câu hỏi</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%question</td>\n		</tr>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Trả lời</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%answer</td>\n		</tr>\n	</tbody>\n</table>\n\n<div>%detail_link_text_vn<br />\n </div>\nTrân trọng cảm ơn.<br />\n<span style=\"color:rgb(178,34,34);\">------------ </span><br />\n<span style=\"color:rgb(178,34,34);\">Email này được gửi tự động từ <a href=\"https://crm.cloudpro.vn\">hệ thống CRM</a>. Vui lòng không phản hồi!</span>\n\n<p></p>\n\n<hr />Dear customer,<br />\n<br />\nThanks for your question. Your answer:\n<p></p>\n\n<table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;border-collapse:collapse;\">\n	<tbody>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Question</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%question</td>\n		</tr>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Answer</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%answer</td>\n		</tr>\n	</tbody>\n</table>\n\n<div>%detail_link_text_en<br />\n </div>\nThanks & Regards.<br />\n<span style=\"color:rgb(178,34,34);\">------------ </span><br />\n<span style=\"color:rgb(178,34,34);\">This email is sent automatically from <a href=\"http://crm.cloudpro.vn\">CRM system</a>. Please do not reply!</span>\n\n<p></p>\n\n<p></p>\n', 0, 1, 'Contacts');
UPDATE vtiger_emailtemplates_seq SET id = (SELECT MAX(templateid) FROM vtiger_emailtemplates);

SET FOREIGN_KEY_CHECKS = 1;