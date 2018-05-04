<?php

namespace hschulz\Event;

/**
 *
 */
interface EventAware
{

    /**
     * Returns the event manager object if set.
     *
     * @return EventManager|null The event manager or null
     */
    public function getEventManager(): ?EventManager;

    /**
     * Sets the event manager for this instance.
     *
     * @param EventManager $manager The event manager
     * @return void
     */
    public function setEventManager(EventManager $manager): void;
}
