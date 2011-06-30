<?php

class ComFilesViewFilesHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$model = KFactory::get('site::com.files.model.files');
		$this->assign('items', $model->getList());
		$this->assign('path', $model->getPath());
		
		$this->assign('params', JComponentHelper::getParams('com_files'));

		return parent::display();
	}
}