<?php

namespace _PhpScoper955845c5b45f\Psr\Log;

/**
 * This Logger can be used to avoid conditional log calls
 *
 * Logging should always be optional, and if no logger is provided to your
 * library creating a NullLogger instance to have something to throw logs at
 * is a good way to avoid littering your code with `if ($this->logger) { }`
 * blocks.
 */
class NullLogger extends \_PhpScoper955845c5b45f\Psr\Log\AbstractLogger
{
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {
        // noop
    }
}
