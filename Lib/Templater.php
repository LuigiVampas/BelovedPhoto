<?php

class Templater {
	public static $__dextep;
	
	private static $__stylesheets = array(
        'metro',
		'jquery.arcticmodal-0.3',
        'metro-icons',
        'metro-responsive',
		'lightbox.min',
        'style'
    );
    private static $__scripts = array(
        'jquery-2.1.3.min',
        'metro',
        'select2.min',
		'jquery.arcticmodal-0.3.min',
		'lightbox.min'
    );
	
	public static function basePage($__page_name, $__content = '', $__stylesheets = array(), $__scripts = array()){
		Templater::$__dextep = new Dextep();
		
		Templater::$__dextep->setVar('page_title', $__page_name);
		Templater::$__dextep->setVar('stylesheets', array_merge($__stylesheets, self::$__stylesheets));
		Templater::$__dextep->setVar('scripts', array_merge($__scripts, self::$__scripts));
		Templater::$__dextep->setVar('content', $__content);
		
		echo Templater::$__dextep->getTemplate('main');
	}
}
