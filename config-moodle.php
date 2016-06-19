<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = getenv('DB_ENV_POSTGRES_DB');
$CFG->dbuser    = getenv('DB_ENV_POSTGRES_USER');
$CFG->dbpass    = getenv('DB_ENV_POSTGRES_PASSWORD');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => false,
  'dbport' => '',
  'dbsocket' => false,
);

$CFG->wwwroot   = getenv('MOODLE_URL');
$CFG->dataroot  = '/var/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');