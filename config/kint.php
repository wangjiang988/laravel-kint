<?php

/*
|--------------------------------------------------------------------------
| Kint Configuration Options
|--------------------------------------------------------------------------
|
| See Kint documentation for full details on what each option does.
|
*/

return array(

	/*
	 * If set to false, Kint will become silent
	 */ 
	'enabled' => true, // env('APP_DEBUG'), 

	'displayCalledFrom' => true,
	
	'fileLinkFormat' => ini_get('xdebug.file_link_format'),

	/*
	 * The file paths displayed within debug traces
	*/
	'appRootDirs' => array(
		base_path()=>'.', // just display a period at application root
		// 		base_path()=>true, // display the full path to file
	),

	'maxStrLength' => 80,
	
	'maxLevels' => 5,

	'theme' => 'original',
		
	'expandedByDefault'=>false,
		
	'cliDetection'=>true,

	'cliColors'=>true,

	/*
	 * Allows you to use these in blade templates:
	 * @d($var) @ddd($var) @sd($var) @s($var) @dd($var)
	 */
	'blade_directives' => true,
	
);