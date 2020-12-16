ALTER TABLE oauth_sessions 
MODIFY COLUMN session_id varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' FIRST,
MODIFY COLUMN user_id integer(19) NULL DEFAULT NULL AFTER session_id,
MODIFY COLUMN auth_time datetime(0) NULL DEFAULT NULL AFTER user_id;