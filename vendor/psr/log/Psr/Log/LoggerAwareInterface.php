<?php

namespace _PhpScoperae7532b8c744\Psr\Log;

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
    public function setLogger(\_PhpScoperae7532b8c744\Psr\Log\LoggerInterface $logger);
}
