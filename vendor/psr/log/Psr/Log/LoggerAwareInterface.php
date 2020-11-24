<?php

namespace _PhpScopere846b54512fc\Psr\Log;

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
    public function setLogger(\_PhpScopere846b54512fc\Psr\Log\LoggerInterface $logger);
}
