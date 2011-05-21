<?php
defined('_JEXEC') or die();
defined('KOOWA') or die();

echo KFactory::tmp('site::mod.slideshow.html', array(
	'params' 	=> $params,
	'module'	=> $module,
	'attribs'	=> $attribs
))->display();