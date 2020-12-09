<?php

namespace _PhpScoperb15c77d6bb3b\Psr\Log;

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
    public function setLogger(\_PhpScoperb15c77d6bb3b\Psr\Log\LoggerInterface $logger);
}
