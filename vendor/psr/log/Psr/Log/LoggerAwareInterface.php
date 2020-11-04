<?php

namespace _PhpScopere32570efa19a\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScopere32570efa19a\Psr\Log\LoggerInterface $logger);
}
