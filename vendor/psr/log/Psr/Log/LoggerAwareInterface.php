<?php

namespace _PhpScoperc0b8351d879b\Psr\Log;

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
    public function setLogger(\_PhpScoperc0b8351d879b\Psr\Log\LoggerInterface $logger);
}
