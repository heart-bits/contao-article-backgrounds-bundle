<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2014
 * @package    AnimateElements
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'] = array('type', 'addImage', 'sortable', 'useImage', 'protected', 'animate_switch', 'parallax_switch');


// Add the new palettes to every Content Element
$GLOBALS['TL_DCA']['tl_content']['palettes']['headline'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['headline']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['text']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['list'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['list']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['list'] = str_replace
(
    'listtype,',
    'listtype,liststart,',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['list']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['table'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['table']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['sliderStart'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['sliderStart']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['code'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['code']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['markdown'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['markdown']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink'] = str_replace
(
    'useImage;',
    'fullwidth,useImage;',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['image']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['player'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['player']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['youtube'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['youtube']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['download'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['download']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['downloads'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['downloads']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['teaser'] = str_replace
(
    '{template_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['teaser']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['form'] = str_replace
(
    '{protected_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{protected_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['form']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['module'] = str_replace
(
    '{protected_legend:hide}',
    '{animate_element},animate_switch,parallax_switch;{protected_legend:hide}',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['module']
);

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['animate_switch'] = 'animate_effect,animate_delay,animate_repeat';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['parallax_switch'] = 'parallax_x,parallax_y,parallax_rotate,parallax_scale,parallax_color,parallax_backgroundcolor,parallax_bordercolor,parallax_opacity';


// Fields
$GLOBALS['TL_DCA']['tl_content']['fields']['animate_switch'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['animate_switch'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['animate_effect'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['animate_effect'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('fade', 'scale-up', 'scale-down', 'slide-top', 'slide-bottom', 'slide-left', 'slide-right', 'shake', 'scale'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['animate_delay'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['animate_delay'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(6) NOT NULL default '600'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['animate_repeat'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['animate_repeat'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL"
);


$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_switch'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_switch'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_x'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_x'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_y'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_y'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_rotate'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_rotate'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_scale'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_scale'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_color'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_color'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_backgroundcolor'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_backgroundcolor'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_bordercolor'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_bordercolor'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['parallax_opacity'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['parallax_opacity'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['listtype']['eval']['tl_class'] = 'w50';

$GLOBALS['TL_DCA']['tl_content']['fields']['liststart'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['liststart'],
  'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);
