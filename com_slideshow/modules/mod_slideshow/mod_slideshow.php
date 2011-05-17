<?php
defined('_JEXEC') or die();
defined('KOOWA') or die();

KFactory::tmp('site::mod.slideshow.html', array(
	'params' 	=> $params,
	'module'	=> $module,
	'attribs'	=> $attribs
))->display();