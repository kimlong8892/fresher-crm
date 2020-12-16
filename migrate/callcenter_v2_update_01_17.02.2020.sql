/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50729
 Source Host           : localhost:3306
 Source Schema         : vtiger

 Target Server Type    : MySQL
 Target Server Version : 50729
 File Encoding         : 65001

 Date: 17/02/2020 11:09:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_call_result
-- ----------------------------
INSERT INTO vtiger_events_call_result VALUES (1, 'call_result_call_back_later', 0, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (2, 'call_result_customer_interested', 1, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (3, 'call_result_wrong_number', 2, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (4, 'call_result_called_back', 3, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (5, 'call_result_not_interested', 4, 1, NULL);
INSERT INTO vtiger_events_call_result VALUES (6, 'call_result_could_not_be_contacted', 5, 1, NULL);

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
INSERT INTO vtiger_events_call_result_seq VALUES (6);

-- ----------------------------
-- Table structure for vtiger_events_inbound_call_purpose
-- ----------------------------
DROP TABLE IF EXISTS vtiger_events_inbound_call_purpose;
CREATE TABLE vtiger_events_inbound_call_purpose  (
  events_inbound_call_purposeid int(11) NOT NULL AUTO_INCREMENT,
  events_inbound_call_purpose varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  sortorderid int(11) NULL DEFAULT NULL,
  presence int(11) NOT NULL DEFAULT 1,
  color varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (events_inbound_call_purposeid) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_inbound_call_purpose
-- ----------------------------
INSERT INTO vtiger_events_inbound_call_purpose VALUES (1, 'inbound_call_purpose_consult_asking', 0, 1, NULL);
INSERT INTO vtiger_events_inbound_call_purpose VALUES (2, 'inbound_call_purpose_products_services_info_enquiry', 1, 1, NULL);
INSERT INTO vtiger_events_inbound_call_purpose VALUES (3, 'inbound_call_purpose_complain_and_feedback', 2, 1, NULL);
INSERT INTO vtiger_events_inbound_call_purpose VALUES (4, 'inbound_call_purpose_support_asking', 3, 1, NULL);
INSERT INTO vtiger_events_inbound_call_purpose VALUES (5, 'inbound_call_purpose_quotes_contracts_orders_feedback', 4, 1, NULL);
INSERT INTO vtiger_events_inbound_call_purpose VALUES (6, 'inbound_call_purpose_other', 5, 1, NULL);

-- ----------------------------
-- Table structure for vtiger_events_inbound_call_purpose_seq
-- ----------------------------
DROP TABLE IF EXISTS vtiger_events_inbound_call_purpose_seq;
CREATE TABLE vtiger_events_inbound_call_purpose_seq  (
  id int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vtiger_events_inbound_call_purpose_seq
-- ----------------------------
INSERT INTO vtiger_events_inbound_call_purpose_seq VALUES (6);

SET FOREIGN_KEY_CHECKS = 1;
