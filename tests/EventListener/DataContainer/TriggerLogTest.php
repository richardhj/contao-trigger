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

namespace EBlick\ContaoTrigger\Test\EventListener\DataContainer;

use EBlick\ContaoTrigger\EventListener\DataContainer\ExecutionLog;

class TriggerLogTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiation(): void
    {
        $obj = new ExecutionLog();
        $this->assertInstanceOf(ExecutionLog::class, $obj);
    }
}
