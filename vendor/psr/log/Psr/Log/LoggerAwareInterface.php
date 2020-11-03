<?php

namespace _PhpScoperd4e30d8318e8\Psr\Log;

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
    public function setLogger(\_PhpScoperd4e30d8318e8\Psr\Log\LoggerInterface $logger);
}
