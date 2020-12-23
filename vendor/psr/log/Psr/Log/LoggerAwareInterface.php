<?php

namespace _PhpScopere0f28e6b9bde\Psr\Log;

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
    public function setLogger(\_PhpScopere0f28e6b9bde\Psr\Log\LoggerInterface $logger);
}
