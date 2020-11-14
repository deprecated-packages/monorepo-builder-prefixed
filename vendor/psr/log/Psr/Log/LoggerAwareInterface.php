<?php

namespace _PhpScopera00544d51e07\Psr\Log;

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
    public function setLogger(\_PhpScopera00544d51e07\Psr\Log\LoggerInterface $logger);
}
