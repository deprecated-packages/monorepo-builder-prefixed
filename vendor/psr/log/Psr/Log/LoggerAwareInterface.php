<?php

namespace _PhpScopere3ed9f66440c\Psr\Log;

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
    public function setLogger(\_PhpScopere3ed9f66440c\Psr\Log\LoggerInterface $logger);
}
