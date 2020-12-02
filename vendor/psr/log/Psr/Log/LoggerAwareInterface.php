<?php

namespace _PhpScopera2ff5fd2b59c\Psr\Log;

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
    public function setLogger(\_PhpScopera2ff5fd2b59c\Psr\Log\LoggerInterface $logger);
}
