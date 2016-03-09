<?php
ini_set('memory_limit', '512M');
error_reporting( E_ALL | E_STRICT );
// Define application environment
defined('APPLICATION_ENV') || define('APPLICATION_ENV',
(getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') :
'development'));
spl_autoload_register('loadClass');

function loadClass($className)
{
	$base_dir = __DIR__ . '/';
	$test_dir = __DIR__ . '/';
	$framework_dir = '../../';
	
	$paths = explode(PATH_SEPARATOR, set_include_path($base_dir . PATH_SEPARATOR . $test_dir . PATH_SEPARATOR. $framework_dir));
	
    $file = str_replace('\\', '/', '../'.$className) . '.php';
	
	if(file_exists($file))
	{
		require_once $file;
	}
	else
	{
		foreach($paths as $path)
		{
			 $pathDir = str_replace('\\', '/', $path);
			 $fileDir = str_replace('\\', '/', $className).'.php';
			 $combined = $pathDir.$fileDir;
			
			
			if(file_exists($combined))
			{
				require_once $combined;
				return;
			}
		}
	}
}
