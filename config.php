<?php
 //Course Manager Configuration file
 unset($CFG);
global($CFG);
 $CFG=new stdClass();

$CFG->dbtype='mysqli';
$dblibrary='native';
$CFG->dbhost='localhost';
$CFG->dbname='cmanager';
$CFG->dbuser='root';
$CFG->dbpass='resistant';

$CFG->wwwroot='http://localhost/cmanager';
$CFG->dataroot='http://localhost/testd';
$CFG->prefix='cm_';
$CFG->admin='admin';
$CFG->passwordsaltmain='3b1&hu%+8Zg.6(I8;;>*&HP{ykQ/ H';

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!