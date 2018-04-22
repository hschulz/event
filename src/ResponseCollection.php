<?php

namespace hschulz\Event;

use \SplStack;

/**
 *
 */
class ResponseCollection extends SplStack {

    /**
     *
     * @param mixed $value
     * @return bool
     */
    public function contains($value): bool {

        $isContained = false;

        foreach ($this as $response) {

            if ($response === $value) {
                $isContained = true;
                break;
            }
        }

        return $isContained;
    }
}
