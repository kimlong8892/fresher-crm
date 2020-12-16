SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for vtiger_login_sessions
-- ----------------------------
DROP TABLE IF EXISTS `vtiger_login_sessions`;
CREATE TABLE `vtiger_login_sessions` (
  `user_id` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL,
  `user_agent` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
