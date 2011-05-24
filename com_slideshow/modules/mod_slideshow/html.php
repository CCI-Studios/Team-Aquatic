<?php
jimport('joomla.filesystem.folder');

class ModSlideshowHtml extends ModDefaultHtml
{
	public function display()
	{
		$imagePath = JPATH_BASE .'/images/stories/'. $this->params->get('path') .'/';
		$images = JFolder::files($imagePath, '.jpg');
		
		JHTML::stylesheet('site.css', 'media/mod_slideshow/');
		JHTML::script('site.js', 'media/mod_slideshow/', true);
		
		$this->assign('images', $images);
		return parent::display();
	}
}