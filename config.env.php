<?php
    /*
    *   Config Environment
    *   Added by Hieu Nguyen on 2018-07-21
    *   Instruction: copy config.evn.sample.php into config.evn.php and change the config that you want
    *   Note: config.evn.php should be ignore in git repository, each developer should create this file himself to prevent conflict
    */

    ini_set('display_errors','off'); version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED) : error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);   // DEBUGGING
    ini_set('display_errors','off'); error_reporting(E_ALL); // STRICT DEVELOPMENT

    /* database configuration
        db_server
        db_port
        db_hostname
        db_username
        db_password
        db_name
    */

    $dbconfig['db_server'] = 'localhost';
    $dbconfig['db_port'] = ':3306';
    $dbconfig['db_username'] = 'root';
    $dbconfig['db_password'] = '@Admin123';
    $dbconfig['db_name'] = 'crm_fresher';
    $dbconfig['db_type'] = 'mysqli';
    $dbconfig['db_status'] = 'true';

    $dbconfig['db_hostname'] = $dbconfig['db_server'].$dbconfig['db_port'];

    // log_sql default value = false
    $dbconfig['log_sql'] = false;

    // persistent default value = true
    $dbconfigoption['persistent'] = true;

    // autofree default value = false
    $dbconfigoption['autofree'] = false;

    // debug default value = 0
    $dbconfigoption['debug'] = 0;

    // seqname_format default value = '%s_seq'
    $dbconfigoption['seqname_format'] = '%s_seq';

    // portability default value = 0
    $dbconfigoption['portability'] = 0;

    // ssl default value = false
    $dbconfigoption['ssl'] = false;

    $host_name = $dbconfig['db_hostname'];

    $site_URL = 'http://127.0.0.1/crm-fresher';

    // root directory path
    $root_directory = '/var/www/html/crm-fresher';

?>
