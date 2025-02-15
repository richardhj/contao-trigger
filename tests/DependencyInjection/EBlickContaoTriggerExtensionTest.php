<?php

declare(strict_types=1);

/*
 * Trigger Framework Bundle for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2018, eBlick Medienberatung
 * @license    LGPL-3.0+
 * @link       https://github.com/eBlick/contao-trigger
 *
 * @author     Moritz Vondano
 */

namespace EBlick\ContaoTrigger\Test\DependencyInjection;

use EBlick\ContaoTrigger\DependencyInjection\EBlickContaoTriggerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class EBlickContaoTriggerExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiation(): void
    {
        $obj = new EBlickContaoTriggerExtension();
        $this->assertInstanceOf(EBlickContaoTriggerExtension::class, $obj);
    }

    public function testLoad(): void
    {
        $container = new ContainerBuilder();

        $extension = new EBlickContaoTriggerExtension();
        $extension->load([], $container);

        $definitions = [
            'eblick_contao_trigger.execution.row_data_compiler',
            'eblick_contao_trigger.execution.log',
            'eblick_contao_trigger.execution.context_factory',
            'eblick_contao_trigger.component.component_manager',

            'eblick_contao_trigger.component.table_condition',
            'eblick_contao_trigger.component.notification_action',

            'eblick_contao_trigger.listener.trigger',

            'eblick_contao_trigger.listener.datacontainer.trigger',
            'eblick_contao_trigger.listener.datacontainer.trigger_log',
            'eblick_contao_trigger.listener.datacontainer.table_condition',
            'eblick_contao_trigger.listener.datacontainer.notification_action'
        ];

        foreach ($definitions as $definition) {
            $this->assertTrue($container->hasDefinition($definition));
        }
    }
}
