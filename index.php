<?php

require_once 'init.php';

$parameters = array(
	'action',
	'code', 
	'error',
	'error_reason',
	'error_description'
);

try {
    foreach ($parameters as $parameter) {
        $$parameter = (isset($_REQUEST[$parameter]) && $_REQUEST[$parameter] != "")
            ? is_array($_REQUEST[$parameter]) 
                ? $_REQUEST[$parameter]
                : trim($_REQUEST[$parameter])
            : "";
    }
	
	if ($error != '')
		ErrorProvider::showError($error, $error_reason. $error_description);
	
	switch($action){
		case 'login' :
			Authentication::login($code);
			break;
		default :
			Authentication::showAuthPage();
	}
    
} catch (Exception $exception) {
    print $exception;
}