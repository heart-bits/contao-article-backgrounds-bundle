<?php

class ArticleBackgrounds extends \Frontend {
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_article_background';
	
	public function compileExt() {
	    $this->Template->background_picture = \FilesModel::findByUuid($this->background_picture)->path;
    }
}