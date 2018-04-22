<?php

namespace hschulz\Event;

use \hschulz\Event\EventManager;

/**
 *
 */
class EventListener {

    /**
     *
     * @var string
     */
    protected $name = '';

    /**
     *
     * @var callable
     */
    protected $callback = null;

    /**
     *
     * @var int
     */
    protected $priority = EventManager::PRIORITY_MIN;

    /**
     *
     * @param string $name
     * @param callable $callback
     * @param int $priority
     */
    public function __construct(string $name, callable $callback, int $priority = EventManager::PRIORITY_MIN) {
        $this->name = $name;
        $this->callback = $callback;
        $this->priority = $priority;
    }

    /**
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     *
     * @return callable
     */
    public function getCallback(): callable {
        return $this->callback;
    }

    /**
     *
     * @return int
     */
    public function getPriority(): int {
        return $this->priority;
    }
}
