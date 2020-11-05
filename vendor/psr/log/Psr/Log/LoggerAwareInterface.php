<?php

namespace _PhpScoperfd1a6a0ee9af\Psr\Log;

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
    public function setLogger(\_PhpScoperfd1a6a0ee9af\Psr\Log\LoggerInterface $logger);
}
