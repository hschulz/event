<?php

declare(strict_types=1);

namespace Hschulz\Event;

/**
 *
 */
interface EventManager
{
    /**
     *
     * @var int
     */
    public const PRIORITY_MIN = 1;

    /**
     *
     * @var int
     */
    public const PRIORITY_MAX = 100;

    /**
     * Attaches a listener to an event
     *
     * @param string $event the event to attach too
     * @param callable $callback a callable function
     * @param int $priority the priority at which the $callback executed
     * @return void
     */
    public function attach(string $event, callable $callback, int $priority = self::PRIORITY_MIN): void;

    /**
     * Detaches a listener from an event
     *
     * @param string $event the event to attach too
     * @param callable $callback a callable function
     * @return bool true on success false on failure
     */
    public function detach(string $event, callable $callback): bool;

    /**
     * Clear all listeners for a given event
     *
     * @param  string $event
     * @return void
     */
    public function clearListeners(string $event): void;

    /**
     * Triggers an event.
     *
     * @param  Event $target
     * @return ResponseCollection
     */
    public function trigger(Event $target): ResponseCollection;
}
