ALTER TABLE vtiger_customview 
ADD COLUMN shared bit NOT NULL DEFAULT 0 AFTER userid,
ADD COLUMN shared_type varchar(20) NULL AFTER shared;