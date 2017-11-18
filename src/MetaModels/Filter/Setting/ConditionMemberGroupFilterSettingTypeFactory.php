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
 * @copyright  2017 Christopher Bölter
 * @license    https://github.com/cboelter/metamodelsfilter_textcombine/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace MetaModels\Filter\Setting;

/**
 * Filter type factory for ConditionMemberGroup filter settings.
 */
class ConditionMemberGroupFilterSettingTypeFactory extends AbstractFilterSettingTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this
            ->setTypeName('conditionmembergroup')
            ->setTypeIcon('system/modules/metamodels/assets/images/icons/filter_and.png')
            ->setTypeClass('MetaModels\Filter\Setting\Condition\ConditionMemberGroup')
            ->allowAttributeTypes();
    }
}
