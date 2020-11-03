<?php

namespace _PhpScoperf2e2fcfe7ee6\Psr\Log;

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
    public function setLogger(\_PhpScoperf2e2fcfe7ee6\Psr\Log\LoggerInterface $logger);
}
