<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package    MetaModels
 * @subpackage FilterConditionMemberGroup
 * @author     Christopher Boelter <christopher@boelter.eu>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * palettes
 */
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['conditionmembergroup extends default']['+config'][] =
    'member_group';

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['conditionmembergroup extends default']['+config'][] =
    'no_member';

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['member_group'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['member_group'],
    'exclude'   => true,
    'inputType' => 'select',
    'eval'      => array(
        'tl_class' => 'w50',
        'includeBlankOption' => true
    )
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['no_member'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['no_member'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array(
        'tl_class' => 'w50 m12',
    )
);