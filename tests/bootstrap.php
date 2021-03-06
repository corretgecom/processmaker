<?php
// ProcessMaker Test Unit Bootstrap
// Defining the PATH_SEP constant, he we are defining if the the path separator symbol will be '\\' or '/'

define('PATH_SEP', '/');

if (!defined('__DIR__')) {
  define ('__DIR__', dirname(__FILE__));
}

// Defining the Home Directory
define('PATH_TRUNK', realpath(__DIR__ . '/../') . PATH_SEP);
define('PATH_HOME',  PATH_TRUNK . 'workflow' . PATH_SEP);

define('SYS_SYS', $GLOBALS['SYS_SYS']);
define('SYS_LANG', $GLOBALS['SYS_LANG']);
define('SYS_SKIN', $GLOBALS['SYS_SKIN']);
//define('DB_ADAPTER', $GLOBALS['DB_ADAPTER']);
//define('DB_NAME', $GLOBALS['DB_NAME']);
//define('DB_USER', $GLOBALS['DB_USER']);
//define('DB_PASS', $GLOBALS['DB_PASS']);
//define('DB_HOST', $GLOBALS['DB_HOST']);
define('PATH_DB', $GLOBALS['PATH_DB']);
define('PATH_DATA', $GLOBALS['PATH_DATA']);
define('PATH_C', PATH_TRUNK . 'tmp/' );
define('PATH_SMARTY_C', PATH_TRUNK . 'tmp/' );
define('PATH_SMARTY_CACHE', PATH_TRUNK . 'tmp/' );

@mkdir (PATH_C);

//require  PATH_HOME . 'engine' . PATH_SEP . 'config' . PATH_SEP . 'paths.php';
  // Defining RBAC Paths constants
  define( 'PATH_RBAC_HOME',     PATH_TRUNK . 'rbac' . PATH_SEP );

  // Defining Gulliver framework paths constants
  define( 'PATH_GULLIVER_HOME', PATH_TRUNK . 'gulliver'  . PATH_SEP );
  define( 'PATH_GULLIVER',      PATH_GULLIVER_HOME . 'system' . PATH_SEP );   //gulliver system classes
  define( 'PATH_GULLIVER_BIN',  PATH_GULLIVER_HOME . 'bin' . PATH_SEP );   //gulliver bin classes
  define( 'PATH_TEMPLATE',      PATH_GULLIVER_HOME . 'templates' . PATH_SEP );
  define( 'PATH_THIRDPARTY',    PATH_GULLIVER_HOME . 'thirdparty' . PATH_SEP );
  define( 'PATH_RBAC',          PATH_RBAC_HOME .     'engine'  . PATH_SEP . 'classes' . PATH_SEP );  //to enable rbac version 2
  define( 'PATH_RBAC_CORE',     PATH_RBAC_HOME .     'engine'  . PATH_SEP );
  define( 'PATH_HTML',          PATH_HOME .          'public_html' . PATH_SEP );

  // Defining PMCore Path constants
  define( 'PATH_CORE',        PATH_HOME . 'engine'       . PATH_SEP );
  define( 'PATH_SKINS',       PATH_CORE . 'skins'        . PATH_SEP );
  define( 'PATH_SKIN_ENGINE', PATH_CORE . 'skinEngine'   . PATH_SEP );
  define( 'PATH_METHODS',     PATH_CORE . 'methods'      . PATH_SEP );
  define( 'PATH_XMLFORM',     PATH_CORE . 'xmlform'      . PATH_SEP );
  define( 'PATH_CONFIG',      PATH_CORE . 'config'       . PATH_SEP );
  define( 'PATH_PLUGINS',     PATH_CORE . 'plugins'      . PATH_SEP  );
  define( 'PATH_HTMLMAIL',    PATH_CORE . 'html_templates' . PATH_SEP );
  define( 'PATH_TPL',         PATH_CORE . 'templates'    . PATH_SEP );
  define( 'PATH_TEST',        PATH_CORE . 'test'         . PATH_SEP );
  define( 'PATH_FIXTURES',    PATH_TEST . 'fixtures'     . PATH_SEP );
  define( 'PATH_RTFDOCS' ,    PATH_CORE . 'rtf_templates' . PATH_SEP );
  define( 'PATH_DYNACONT',    PATH_CORE . 'content' . PATH_SEP . 'dynaform' . PATH_SEP );
  //define( 'PATH_LANGUAGECONT',PATH_CORE . 'content' . PATH_SEP . 'languages' . PATH_SEP );
  define( 'SYS_UPLOAD_PATH',  PATH_HOME . "public_html/files/" );
  define( 'PATH_UPLOAD',      PATH_HTML . 'files' . PATH_SEP);

  define( 'PATH_WORKFLOW_MYSQL_DATA', PATH_CORE . 'data' . PATH_SEP.'mysql'.PATH_SEP);
  define( 'PATH_RBAC_MYSQL_DATA',     PATH_RBAC_CORE . 'data' . PATH_SEP.'mysql'.PATH_SEP);
  define( 'FILE_PATHS_INSTALLED',     PATH_CORE . 'config' . PATH_SEP . 'paths_installed.php' );
  define( 'PATH_WORKFLOW_MSSQL_DATA', PATH_CORE . 'data' . PATH_SEP.'mssql'.PATH_SEP);
  define( 'PATH_RBAC_MSSQL_DATA',     PATH_RBAC_CORE . 'data' . PATH_SEP.'mssql'.PATH_SEP);
  define( 'PATH_CONTROLLERS',         PATH_CORE . 'controllers' . PATH_SEP );
  define( 'PATH_SERVICES_REST',       PATH_CORE . 'services' . PATH_SEP . 'rest' . PATH_SEP);

  define("URL_KEY", 'c0l0s40pt1mu59r1m3' );

set_include_path(
    PATH_CORE . PATH_SEPARATOR .
    PATH_THIRDPARTY . PATH_SEPARATOR .
    PATH_THIRDPARTY . 'pear'. PATH_SEPARATOR .
    PATH_RBAC_CORE . PATH_SEPARATOR .
    get_include_path()
);

// include bootstrap Class
require_once (PATH_GULLIVER . PATH_SEP . 'class.bootstrap.php');
  // include Gulliver Class
//  require_once( PATH_GULLIVER . PATH_SEP . 'class.g.php');

// perpare propel env.
//require_once "propel/Propel.php";
//require_once "creole/Creole.php";


//initialize required classes
//G::LoadClass ('dbtable');
//G::LoadClass ('system');


//testing the autoloader feature
spl_autoload_register(array('Bootstrap', 'autoloadClass'));
Bootstrap::registerClass('headPublisher', PATH_GULLIVER . "class.headPublisher.php");
Bootstrap::registerClass('G', PATH_GULLIVER . "class.g.php");
Bootstrap::registerClass('System',        PATH_HOME . "engine/classes/class.system.php");
Bootstrap::registerClass('headPublisher', PATH_GULLIVER . "class.headPublisher.php");
Bootstrap::registerClass('publisher', PATH_GULLIVER . "class.publisher.php");
Bootstrap::registerClass('xmlform', PATH_GULLIVER . "class.xmlform.php");
Bootstrap::registerClass('XmlForm_Field', PATH_GULLIVER . "class.xmlform.php");
Bootstrap::registerClass('xmlformExtension', PATH_GULLIVER . "class.xmlformExtension.php");
Bootstrap::registerClass('form',         PATH_GULLIVER . "class.form.php");
Bootstrap::registerClass('menu',         PATH_GULLIVER . "class.menu.php");
Bootstrap::registerClass('Xml_Document', PATH_GULLIVER . "class.xmlDocument.php");
Bootstrap::registerClass('DBSession',    PATH_GULLIVER . "class.dbsession.php");
Bootstrap::registerClass('DBConnection', PATH_GULLIVER . "class.dbconnection.php");
Bootstrap::registerClass('DBRecordset',  PATH_GULLIVER . "class.dbrecordset.php");
Bootstrap::registerClass('DBTable',      PATH_GULLIVER . "class.dbtable.php");
Bootstrap::registerClass('xmlMenu',      PATH_GULLIVER . "class.xmlMenu.php");
Bootstrap::registerClass('XmlForm_Field_FastSearch', PATH_GULLIVER . "class.xmlformExtension.php");
Bootstrap::registerClass('XmlForm_Field_XmlMenu', PATH_GULLIVER . "class.xmlMenu.php");
Bootstrap::registerClass('XmlForm_Field_HTML',  PATH_GULLIVER . "class.dvEditor.php");
Bootstrap::registerClass('XmlForm_Field_WYSIWYG_EDITOR',  PATH_GULLIVER . "class.wysiwygEditor.php");
Bootstrap::registerClass('Controller',          PATH_GULLIVER . "class.controller.php");
Bootstrap::registerClass('HttpProxyController', PATH_GULLIVER . "class.httpProxyController.php");
Bootstrap::registerClass('templatePower',            PATH_GULLIVER . "class.templatePower.php");
Bootstrap::registerClass('XmlForm_Field_SimpleText', PATH_GULLIVER . "class.xmlformExtension.php");
Bootstrap::registerClass('Groups',       PATH_HOME . "engine/classes/class.groups.php");
Bootstrap::registerClass('Tasks',        PATH_HOME . "engine/classes/class.tasks.php");
Bootstrap::registerClass('Calendar',     PATH_HOME . "engine/classes/class.calendar.php");
Bootstrap::registerClass('processMap',   PATH_HOME . "engine/classes/class.processMap.php");

Bootstrap::registerSystemClasses();


require_once "pear/Net/JSON.php";
Propel::init( PATH_CORE . "config/databases.php" );

//read memcached configuration
$config = System::getSystemConfiguration ('', '', SYS_SYS);
define ('MEMCACHED_ENABLED', $config ['memcached']);
define ('MEMCACHED_SERVER', $config ['memcached_server']);
define ('TIME_ZONE', $config ['time_zone']);

