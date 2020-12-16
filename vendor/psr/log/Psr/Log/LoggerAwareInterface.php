<?php

namespace _PhpScoperfec5e512f2f8\Psr\Log;

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
    public function setLogger(\_PhpScoperfec5e512f2f8\Psr\Log\LoggerInterface $logger);
}
