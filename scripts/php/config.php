<?php
define('URL', $_SERVER['HTTP_HOST']);

/**
 *	Auto-Detect Environment
 *	
 *	@description	Auto-detects environment based on URL
 */
switch(URL) {
	case strpos(URL, '.local') !== FALSE:
		if(!defined('ENVR')) define('ENVR', 'local');
	break;
	case strpos(URL, 'dev.') !== FALSE:
		if(!defined('ENVR')) define('ENVR', 'development');
	break;
	default: 
	case strpos(URL, 'www.') !== FALSE:
		if(!defined('ENVR')) define('ENVR', 'production');
	break;
}

/**
 *	ENVR Specific Globals
 *	
 *	@description	Sets environment globals (also used by WP Blog)
 */
switch(ENVR) {
	default: 
	case 'local':
		if(!defined('DBUG')) define('DBUG', FALSE);
		error_reporting(-1); ini_set('display_errors', 1);
	break;
	case 'development':
		if(!defined('DBUG')) define('DBUG', FALSE);
		error_reporting(-1); ini_set('display_errors', 1);
	break;
	case 'production':
		if(!defined('DBUG')) define('DBUG', FALSE);
		error_reporting(0); ini_set('display_errors', 0);
	break;
}
