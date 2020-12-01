<?php

namespace _PhpScopera28be7b3fe51\Psr\Log;

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
    public function setLogger(\_PhpScopera28be7b3fe51\Psr\Log\LoggerInterface $logger);
}
