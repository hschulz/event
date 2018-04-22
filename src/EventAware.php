<?php

namespace hschulz\Event;

use \hschulz\Event\EventManager;

/**
 *
 */
interface EventAware {

    /**
     *
     * @return EventManager
     */
    public function getEventManager(): EventManager;

    /**
     *
     * @param EventManager $manager
     * @return void
     */
    public function setEventManager(EventManager $manager): void;
}
