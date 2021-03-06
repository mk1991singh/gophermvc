<?php	
switch( $_SERVER['SERVER_NAME'] ){
	
	
	case 'location 1':
	break;
	
	case 'location 2 etc':
	break;
	
	default:
		
		$cfg['siteName'] = 'Gopher MVC';			
		$cfg['base_url'] = 'http://localhost/gophertest';
		$cfg['debug'] = true;
		
		$cfg['server'] = 'localhost';
		
		$cfg['databaseName'] = 'gophermvc';
		$cfg['databaseUsername'] = 'root';
		$cfg['databasePassword'] = '';
		$cfg['databsePrefix'] = 'dac';
	
	break;
}
/***********************************************************/	
/**************** Nothing to change below ******************/

define('ROOT_NAMESPACE', 'Acme');	
define('ROOT', $cfg['base_url'] );
define('DEBUG', $cfg['debug'] );
define('HASH_TYPE', 'sha512');
define('BASE_URL', $cfg['base_url'] );
define('INACTIVE_INTERVAL', 1);//Number of hours of inactivity before having to log in again

/**/
define('TEMPLATE','default');
define('DATEFORMAT_FROM_MYSQL','%d/%m/%Y');
define('DATEFORMAT_PHP_UKDATE','Y-m-d');
define('TITLE_TAG',( !empty($cfg['siteName'])? $cfg['siteName'] : 'Site name') );
define('SITE_NAME',( !empty($cfg['siteName'])? $cfg['siteName'] : 'Site name') );
/**/

define('HOST', $cfg['server'] );
define('DB_NAME', $cfg['databaseName'] );
define('DB_USER', $cfg['databaseUsername'] );
define('DB_PREFIX', ( $cfg['databsePrefix'] ? $cfg['databsePrefix'].'_' : '') );
define('DB_PASSWORD', $cfg['databasePassword'] );

define('DATETIME_ZONE', 'Europe/London');