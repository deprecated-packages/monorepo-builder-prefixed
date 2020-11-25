<?php

namespace _PhpScopera5e5d165d78c\Psr\Log;

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
    public function setLogger(\_PhpScopera5e5d165d78c\Psr\Log\LoggerInterface $logger);
}
