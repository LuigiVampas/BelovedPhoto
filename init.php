<?php

/* 
 * Copyright (c) 2016, Paul
 * All rights reserved.
 */


ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('memory_limit', -1);
ini_set('max_execution_time', -1);

define("CLIENT_ID", '6d1057372c6049ecb9e6c54cc2b2a36f');
define("CLIENT_SECRET", '21e068f328c442b9a58fc393fe6aac62');
define("REDIRECT_URI", 'http://likesdoer.esy.es');
define("APPDIR", __DIR__ . DIRECTORY_SEPARATOR);

require 'vendor/autoload.php';

session_start();

$timezoneName = timezone_name_from_abbr("", 3*3600, false);
date_default_timezone_set($timezoneName);