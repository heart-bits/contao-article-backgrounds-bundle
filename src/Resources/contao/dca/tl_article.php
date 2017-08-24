<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2014
 * @package    ArticleBackgrounds
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'] = array('protected', 'published', 'background_switch');

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace
(
    'keywords;',
    'keywords;{article_background},background_switch;',
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['background_switch'] = 'background_color,background_style,background_picture';

/**
 * Fields
 */

 $GLOBALS['TL_DCA']['tl_article']['fields']['article_url'] = array(
 	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['article_url'],
 	'exclude'                 => true,
 	'inputType'               => 'pageTree',
 	'eval'                    => array('fieldType'=>'radio'),
 	'sql'                     => (version_compare(VERSION, '3.2', '<')) ? "varchar(255) NOT NULL default ''" : "binary(16) NULL"
 );

$GLOBALS['TL_DCA']['tl_article']['fields']['background_switch'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_switch'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_picture'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_picture'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'w50 clr'),
	'sql'                     => (version_compare(VERSION, '3.2', '<')) ? "varchar(255) NOT NULL default ''" : "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_gallery'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_gallery'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'files'=>true, 'tl_class'=>'w50'),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_color'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('white', 'light-gray', 'dark-gray', 'black', 'gold'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_article_background']['colors'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color_inside'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_color_inside'],
	'exclude'                 => true,
	'inputType'               => 'select',
  'options'                 => array('white', 'light-gray', 'dark-gray', 'black', 'gold'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_article_background']['colors'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_repeat'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_repeat'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('repeat', 'repeat-x', 'repeat-y', 'no-repeat'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_position'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_position'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('left top', 'left center', 'left bottom', 'center top', 'center center', 'center bottom', 'right top', 'right center', 'right bottom'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_size'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_size'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('contain', 'cover', '100% auto', 'auto 100%', 'auto'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_style'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_style'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('light', 'dark'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_article_background']['styles'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_float'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_float'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('left', 'right'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['parallax_background'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_background'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>8, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_overlay'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article_background']['background_overlay'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('no', 'yes'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);
