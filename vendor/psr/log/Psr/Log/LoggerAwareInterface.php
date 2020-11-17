<?php

namespace _PhpScopere8131a326633\Psr\Log;

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
    public function setLogger(\_PhpScopere8131a326633\Psr\Log\LoggerInterface $logger);
}
