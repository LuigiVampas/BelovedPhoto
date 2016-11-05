<?php

class Authentication {
	public static function login($__code){
		$user_info_arr = InstagramApi::getUserInfo($__code);
		
		print '<pre>'.print_r($user_info_arr).'</pre>';
	}
	
	public static function showAuthPage(){
		Templater::$__dextep = new Dextep();
		
		Templater::$__dextep->setVar('client_id', CLIENT_ID);
		Templater::$__dextep->setVar('redirect_uri', REDIRECT_URI);
		
		$content = Templater::$__dextep->getTemplate('autorize');
		
		Templater::basePage('Авторизация', $content, array('metro-schemes'), array('auth'));
	}
}