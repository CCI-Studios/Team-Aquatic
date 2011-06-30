<?php

class ComFilesModelFiles extends KModelAbstract
{
	
	protected $_path;
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_path = $config->path;
	}
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'path'	=> 'media/com_files/uploads'
		));
		
		parent::_initialize($config);
	}
	
	public function getList()
	{
		if (!$this->_list) {
			$dirs = $this->_getDirs($this->_path);
			$this->_list = array();
			foreach ($dirs as $dir) {
				$this->_list[$dir] = $this->_getFiles($dir, $this->_path);
			}
		}
		
		return $this->_list;
	}
	
	protected function _getDirs($path)
	{
		$dirs = array();
		
		if (is_dir($path)) {
			$files = scandir($path);
			
			foreach ($files as $file) {
				if (is_dir($path.'/'.$file) && $file !== '.' && $file !== '..') {
					$dirs[] = $file;
				}
			}
		}
		
		return $dirs;
	}
	
	protected function _getFiles($path, $root = '', $types = array('pdf'))
	{
		$files = array();
		if (is_dir($root .'/'. $path)) {
			$temp = scandir($root .'/'. $path);
			
			foreach ($temp as $file) {
				
				if (!is_dir($root .'/'. $path .'/'. $file) && $file !== '.' && $file !== '..') {
					$files[] = $file;
				}
			}
		}
		
		return $files;
	}
	
	public function getPath()
	{
		return $this->_path;
	}
}