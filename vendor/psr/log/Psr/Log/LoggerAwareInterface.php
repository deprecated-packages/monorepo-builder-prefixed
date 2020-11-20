<?php

namespace _PhpScopercdc90a6628b6\Psr\Log;

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
    public function setLogger(\_PhpScopercdc90a6628b6\Psr\Log\LoggerInterface $logger);
}
