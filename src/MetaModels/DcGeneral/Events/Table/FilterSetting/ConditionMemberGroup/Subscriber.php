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


namespace MetaModels\DcGeneral\Events\Table\FilterSetting\ConditionMemberGroup;

use ContaoCommunityAlliance\DcGeneral\Contao\View\Contao2BackendView\Event\GetPropertyOptionsEvent;
use ContaoCommunityAlliance\DcGeneral\Contao\View\Contao2BackendView\Event\ModelToLabelEvent;
use MetaModels\DcGeneral\Events\BaseSubscriber;

/**
 * Handle events for tl_metamodel_filtersetting for membergroupcondition.
 *
 */
class Subscriber extends BaseSubscriber
{

    /**
     * Boot the system in the backend.
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     * @SuppressWarnings(PHPMD.CamelCaseVariableName)
     */
    protected function registerEventsInDispatcher()
    {
        $this
            ->addListener(
                GetPropertyOptionsEvent::NAME,
                array($this, 'handleMemberGroup')
            )
            ->addListener(
                ModelToLabelEvent::NAME,
                array($this, 'modelToLabel')
            );
    }

    /**
     * Retrieve all member groups.
     *
     * @param GetPropertyOptionsEvent $event The event.
     *
     * @return void
     */
    public function handleMemberGroup(GetPropertyOptionsEvent $event)
    {
        if (($event->getEnvironment()->getDataDefinition()->getName() !== 'tl_metamodel_filtersetting')
            || ($event->getPropertyName() !== 'member_group')) {
            return;
        }

        $db = $this->getServiceContainer()->getDatabase();
        $group = $db->prepare("SELECT id, name FROM tl_member_group")->execute();
        $options = array();

        while($group->next()) {
            $options[$group->id] = $group->name;
        }

        $event->setOptions($options);
    }

    /**
     * Render a filter setting into html.
     *
     * @param ModelToLabelEvent $event The event.
     *
     * @return void
     */
    public function modelToLabel(ModelToLabelEvent $event)
    {
        if (($event->getEnvironment()->getDataDefinition()->getName()
                !== 'tl_metamodel_filtersetting')
            && $event->getModel()->getProperty('type') == 'conditionmembergroup'
        ) {
            return;
        }

        $environment = $event->getEnvironment();
        $model       = $event->getModel();
    }
}
