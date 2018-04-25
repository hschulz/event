<?php

namespace hschulz\Event;

/**
 *
 */
interface EventAware
{

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
