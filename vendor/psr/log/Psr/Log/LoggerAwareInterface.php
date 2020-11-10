<?php

namespace _PhpScopera31d0d6ff47a\Psr\Log;

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
    public function setLogger(\_PhpScopera31d0d6ff47a\Psr\Log\LoggerInterface $logger);
}
