<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

error_reporting(E_ALL);			// FIXME 
ini_set('display_errors', '1');

echo KFactory::get('site::com.files.dispatcher')->dispatch();