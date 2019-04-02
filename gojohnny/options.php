<?php
/*
	This file is for setting options for the go!Johnny class library.
	Application settings should be configured in the config.php file.
	*/
$options = array(
	'GJ_USETIDY' => false
	, 'GJ_PATH_LOCAL' => '..' . DIRECTORY_SEPARATOR . 'gojohnny' /* Used by PHP. */
	, 'GJ_PATH_WEB' => '..' . DIRECTORY_SEPARATOR . 'gojohnny' /* Used by JavaScript and CSS. */
	, 'GJ_AUTOCLASS' => false /* Automatically assign a class attribute to every HTML tag, based on the go!Johnny class name of the object. */
	, 'GJ_AUTOID' => false    /* Automatically assign a random ID attribute to every HTML tag generated. */
	, 'GJ_AUTOMAIN' => true  /* Automatically generate a section or div with an id of 'main' which will be the default container for everything added to the page. */
	, 'CLASS_PATH' => 'classes' . DIRECTORY_SEPARATOR
	, 'MEDIA_PATH' => 'media' . DIRECTORY_SEPARATOR
	, 'MODULES_PATH' => 'modules' . DIRECTORY_SEPARATOR
	, 'PARSEDOWN' => '.' . DIRECTORY_SEPARATOR . 'parsedown' . DIRECTORY_SEPARATOR . 'Parsedown.php'
	);
foreach($options as $key => $val){
	if(!defined($key)){
		define($key, $val);
		}
	}
?>
