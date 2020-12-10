<?php

namespace _PhpScopere691b6ebfa72\Psr\Log;

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
    public function setLogger(\_PhpScopere691b6ebfa72\Psr\Log\LoggerInterface $logger);
}
