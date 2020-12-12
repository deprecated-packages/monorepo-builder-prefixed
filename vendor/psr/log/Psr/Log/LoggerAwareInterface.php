<?php

namespace _PhpScoperf40000691b7b\Psr\Log;

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
    public function setLogger(\_PhpScoperf40000691b7b\Psr\Log\LoggerInterface $logger);
}
