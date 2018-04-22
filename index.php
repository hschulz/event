<?php

require_once 'vendor/autoload.php';

$m = new hschulz\Event\Manager();

class TestEvent extends \hschulz\Event\AbstractEvent {

}

$m->attach(\hschulz\Event\Event::EVENT_ALL, function(\hschulz\Event\Event $event) {
    $event->stopPropagation(true);
    var_dump($event);
});

$e = new TestEvent();
$e->setName('test');
$e->setParams(['data' => 1]);

$m->trigger($e);
