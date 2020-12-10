<?php

namespace _PhpScoperd1c9c8ec01a8\Psr\Log;

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
    public function setLogger(\_PhpScoperd1c9c8ec01a8\Psr\Log\LoggerInterface $logger);
}
