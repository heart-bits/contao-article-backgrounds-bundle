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
 /*
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'] = array('type', 'defineRoot', 'source', 'interactive', 'protected', 'reg_assignDir', 'reg_activate', 'scrollspynav_switch');


// Add the new palettes to every Content Element
$GLOBALS['TL_DCA']['tl_module']['palettes']['navigation'] = str_replace
(
    '{template_legend:hide}',
    '{scrollspynav},scrollspynav_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_module']['palettes']['navigation']
);

$GLOBALS['TL_DCA']['tl_module']['palettes']['breadcrumb'] = str_replace
(
    '{template_legend:hide}',
    '{scrollspynav},scrollspynav_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_module']['palettes']['breadcrumb']
);

$GLOBALS['TL_DCA']['tl_module']['palettes']['customnav'] = str_replace
(
    '{template_legend:hide}',
    '{scrollspynav},scrollspynav_switch;{template_legend:hide}',
    $GLOBALS['TL_DCA']['tl_module']['palettes']['customnav']
);
*/

/**
 * Subpalettes
 */
 /*
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['scrollspynav_switch'] = 'smoothscroll,activeclass,topoffset,leftoffset';


// Fields
$GLOBALS['TL_DCA']['tl_module']['fields']['scrollspynav_switch'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['scrollspynav_switch'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['smoothscroll'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['smoothscroll'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 wizard'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['activeclass'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['activeclass'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['topoffset'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['topoffset'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['leftoffset'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_uikit_elements']['leftoffset'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(6) NOT NULL default ''"
);
*/
