SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- Create table portal_oauth_sessions
DROP TABLE IF EXISTS `portal_oauth_sessions`;
CREATE TABLE `portal_oauth_sessions` (
  `session_id` varchar(50) NOT NULL DEFAULT '',
  `customer_id` int(19) DEFAULT NULL,
  `auth_time` datetime DEFAULT NULL,
  PRIMARY KEY (`session_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create table portal_notifications
DROP TABLE IF EXISTS `portal_notifications`;
CREATE TABLE `portal_notifications` (
  `id` int(19) NOT NULL AUTO_INCREMENT,
  `receiver_id` int(19) NOT NULL,
  `category` varchar(50) DEFAULT '',
  `image` varchar(200) DEFAULT NULL,
  `related_record_id` int(19) DEFAULT NULL,
  `related_record_name` varchar(200) DEFAULT NULL,
  `related_module_name` varchar(100) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  `extra_data` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;

-- Alter table vtiger_portalinfo to store notify tokens
ALTER TABLE vtiger_portalinfo ADD COLUMN notify_tokens text NULL AFTER isactive;

-- Update email template for new login info notify
UPDATE vtiger_emailtemplates SET foldername = 'Public', templatename = '[Portal] Customer Account', templatepath = '', subject = 'Customer Portal Login Details', description = 'Email template gửi thông tin đăng nhập Customer Portal đến KH mỗi khi tài khoản được kích hoạt hoặc update email', body = 'Chào %full_name%,<br />\n <br />\nHệ thống đã khởi tạo cho bạn tài khoản Customer Portal tương ứng với email %email%. Xin vui lòng đăng nhập và đổi sang mật khẩu khác bảo mật hơn.<br />\n \n<table style=\"text-align:left;width:100%;border-collapse:collapse;\"><tbody><tr><td style=\"padding:3px;border:1px solid #ccc;width:20%;\">Tên đăng nhập</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%username%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Email</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%email%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Mật khẩu</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%password%</td>\n		</tr></tbody></table><br />\nBạn có thể đăng nhập tài khoản vào Customer Portal của chúng tôi tại: %portal_url%<br /><br />\nTrân trọng cảm ơn.<br /><br /><span style=\"color:rgb(178,34,34);\">------------ </span><br /><span style=\"color:rgb(178,34,34);\">Email này được gửi tự động từ hệ thống CRM. Vui lòng không phản hồi!</span><br />\n \n<hr /><br />\nDear %full_name%,<br /><br />\nWe have created a Customer Portal account for you with %email%. Please login and change with your secure password.<br />\n \n<table style=\"text-align:left;width:100%;border-collapse:collapse;\"><tbody><tr><td style=\"padding:3px;border:1px solid #ccc;width:20%;\">Username</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%username%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Email</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%email%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Password</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%password%</td>\n		</tr></tbody></table><br />\nYou can log into our Customer Portal at: %portal_url%<br /><br />\nThanks and Regards.<br /><br /><span style=\"color:rgb(178,34,34);\">------------ </span><br /><span style=\"color:rgb(178,34,34);\">This email is sent automatically from CRM system. Please do not reply!</span>', deleted = 0, systemtemplate = 1, module = 'Contacts' WHERE templateid = 10;

-- Insert email template for password reset
INSERT INTO vtiger_emailtemplates(foldername, templatename, templatepath, subject, description, body, deleted, systemtemplate, module) VALUES (NULL, '[Portal] Reset Password', NULL, 'Your new Customer Portal account password', 'Mẫu email thông báo mật khẩu mới cho KH sau khi reset password trên Portal hoặc Mobile app', 'Chào %full_name%,<br />\n <br />\nHệ thống đã nhận được yêu cầu reset mật khẩu tài khoản Customer Portal của bạn và lúc <b>%reset_time%</b>. Xin vui lòng sử dụng thông tin đăng nhập mới trong lần đăng nhập tiếp theo.<br />\n \n<table style=\"text-align:left;width:100%;border-collapse:collapse;\"><tbody><tr><td style=\"padding:3px;border:1px solid #ccc;width:20%;\">Tên đăng nhập</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%username%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Email</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%email%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Mật khẩu</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%new_password%</td>\n		</tr></tbody></table><br />\nTrân trọng cảm ơn.<br /><br /><span style=\"color:rgb(178,34,34);\">------------ </span><br /><span style=\"color:rgb(178,34,34);\">Email này được gửi tự động từ hệ thống CRM. Vui lòng không phản hồi!</span><br />\n \n<hr /><br />\nDear %full_name%,<br /><br />\nWe received a reset password request for your Customer Portal account at <b>%reset_time%</b>. Please use these new information for your next login.<br />\n \n<table style=\"text-align:left;width:100%;border-collapse:collapse;\"><tbody><tr><td style=\"padding:3px;border:1px solid #ccc;width:20%;\">Username</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%username%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Email</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%email%</td>\n		</tr><tr><td style=\"border:1px solid #ccc;padding:3px;\">Password</td>\n			<td style=\"border:1px solid #ccc;padding:3px;\">%new_password%</td>\n		</tr></tbody></table><br />\nThanks and Regards.<br /><br /><span style=\"color:rgb(178,34,34);\">------------ </span><br /><span style=\"color:rgb(178,34,34);\">This email is sent automatically from CRM system. Please do not reply!</span>', 0, 1, 'Contacts');
UPDATE vtiger_emailtemplates_seq SET id = (SELECT MAX(templateid) FROM vtiger_emailtemplates);