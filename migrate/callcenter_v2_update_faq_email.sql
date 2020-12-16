DELETE FROM vtiger_emailtemplates WHERE templatename = 'Faq Email';
INSERT INTO vtiger_emailtemplates(foldername, templatename, templatepath, subject, description, body, deleted, systemtemplate, module) VALUES (NULL, 'Faq Email', NULL, 'Faq - %question', 'Faq Email sent from call popup feature', '\n<p>Xin chào quý khách,<br />\n<br />\nXin cám ơn về câu hỏi của bạn. Chúng tôi xin giải đáp thắc mắc của bạn như sau:</p>\n\n<table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;border-collapse:collapse;\">\n	<tbody>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Câu hỏi</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%question</td>\n		</tr>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Trả lời</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%answer</td>\n		</tr>\n	</tbody>\n</table>\n\n<div></div>\nTrân trọng cảm ơn.<br />\n<span style=\"color:rgb(178,34,34);\">------------ </span><br />\n<span style=\"color:rgb(178,34,34);\">Email này được gửi tự động từ <a href=\"https://crm.cloudpro.vn\">hệ thống CRM</a>. Vui lòng không phản hồi!</span>\n\n<p></p>\n\n<hr />Dear customer,<br />\n<br />\nThanks for your question. Your answer:\n<p></p>\n\n<table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;border-collapse:collapse;\">\n	<tbody>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Question</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%question</td>\n		</tr>\n		<tr>\n			<th style=\"width:20%;text-align:left;padding:3px;border:1px solid #ccc;font-weight:100;\">Answer</th>\n			<td style=\"padding:3px;border:1px solid #ccc;\">%answer</td>\n		</tr>\n	</tbody>\n</table>\n\n<div></div>\nThanks & Regards.<br />\n<span style=\"color:rgb(178,34,34);\">------------ </span><br />\n<span style=\"color:rgb(178,34,34);\">This email is sent automatically from <a href=\"http://crm.cloudpro.vn\">CRM system</a>. Please do not reply!</span>\n\n<p></p>\n\n<p></p>\n', 0, 1, 'Contacts');
UPDATE vtiger_emailtemplates_seq SET id = (SELECT MAX(templateid) FROM vtiger_emailtemplates);