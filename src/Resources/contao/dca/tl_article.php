<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2019
 * @package    ArticleBackgrounds
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'] = array('protected', 'published', 'background_switch');

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(
    'keywords;',
    'keywords;{article_background},background_switch;',
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['background_switch'] = 'background_color,background_color_inside,background_size,background_style,background_picture,background_float';

/**
 * Fields
 */

$GLOBALS['TL_DCA']['tl_article']['fields']['background_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_switch'],
    'exclude' => true,
    'filter' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'submitOnChange' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_picture'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_picture'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => array(
        'fieldType' => 'radio',
        'files' => true,
        'filesOnly' => true,
        'extensions' => $GLOBALS['TL_CONFIG']['validImageTypes'],
        'tl_class' => 'w50 clr'
    ),
    'sql' => (version_compare(VERSION, '3.2', '<')) ? "varchar(255) NOT NULL default ''" : "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_color'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'white',
        'light-gray',
        'dark-gray',
        'black',
        'yellow',
        'blue',
        'green',
        'red'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color_inside'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_color_inside'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'white',
        'light-gray',
        'dark-gray',
        'black',
        'yellow',
        'blue',
        'green',
        'red'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_size'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_size'],
    'exclude'                 => true,
    'inputType'               => 'imageSize',
    'reference'               => &$GLOBALS['TL_LANG']['MSC'],
    'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'options_callback' => static function ()
    {
        return Contao\System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(Contao\BackendUser::getInstance());
    },
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_style'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_style'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'light',
        'dark'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['styles'],
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_float'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_float'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'left',
        'right'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['floats'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);
