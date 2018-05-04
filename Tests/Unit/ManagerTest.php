<?php

namespace hschulz\Event\Tests;

use \hschulz\Event\AbstractEvent;
use \hschulz\Event\Manager;
use \PHPUnit\Framework\TestCase;

final class ManagerTest extends TestCase
{
    public function testCanAttachListener()
    {
        $methods = ['getName', 'setName', 'getParams', 'setParams'];

        $stub = $this->getMockForAbstractClass(
            AbstractEvent::class, [], '', true, true, true, $methods
        );

        $stub->expects($this->any())
             ->method('getName')
             ->will($this->returnValue('test'));

        $stub->expects($this->any())
             ->method('setParams')
             ->will($this->returnValue(['test' => 'test']));

        $manager = new Manager();
        $manager->attach('test', function ($event) {
            return 'AAABBB';
        });

        $responses = $manager->trigger($stub);

        $response = $responses->pop();

        $this->assertEquals('AAABBB', $response);
    }
}
