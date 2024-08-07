<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2019
 * @package    ArticleBackgrounds
 * @license    GNU/LGPL
 * @filesource
 */

use Contao\BackendUser;
use Contao\System;

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'background_switch';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'polygon_switch';

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(
    'inColumn;',
    'inColumn;{article_background},background_switch,polygon_switch;',
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['background_switch'] = 'background_color,background_color_inside,background_size,background_style,background_picture,background_float';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['polygon_switch'] = 'polygon_style,polygon_color,polygon_logo';

/**
 * Fields
 */

$GLOBALS['TL_DCA']['tl_article']['fields']['background_switch'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_switch'],
    'exclude' => true,
    'filter' => true,
    'inputType' => 'checkbox',
    'eval' => [
        'submitOnChange' => true,
        'tl_class' => 'w50'
    ],
    'sql' => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['background_picture'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_picture'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => [
        'fieldType' => 'radio',
        'files' => true,
        'filesOnly' => true,
        'extensions' => '%contao.image.valid_extensions%',
        'tl_class' => 'w50 clr'
    ],
    'sql' => "binary(16) NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_color'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color_inside'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_color_inside'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['background_size'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_size'],
    'exclude' => true,
    'inputType' => 'imageSize',
    'reference' => &$GLOBALS['TL_LANG']['MSC'],
    'eval' => [
        'rgxp' => 'natural',
        'includeBlankOption' => true,
        'nospace' => true,
        'helpwizard' => true,
        'tl_class' => 'w50'
    ],
    'options_callback' => static function () {
        return System::getContainer()->get('contao.image.sizes')->getOptionsForUser(BackendUser::getInstance());
    },
    'sql' => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['background_style'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_style'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG']['tl_article']['styles'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['styles'],
    'eval' => [
        'tl_class' => 'w50'
    ],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['background_float'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_float'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG']['tl_article']['floats'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['floats'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['polygon_switch'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['polygon_switch'],
    'exclude' => true,
    'filter' => true,
    'inputType' => 'checkbox',
    'eval' => [
        'submitOnChange' => true,
        'tl_class' => 'clr w50'
    ],
    'sql' => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['polygon_style'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['polygon_style'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG']['tl_article']['polygon_styles'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['polygon_styles'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'clr w50'
    ],
    'sql' => "varchar(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['polygon_color'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['polygon_color'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['colors'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ],
    'sql' => "varchar(32) NOT NULL default ''"
];
