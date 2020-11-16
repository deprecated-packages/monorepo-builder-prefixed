<?php

namespace _PhpScoper716f383f1097\Psr\Log;

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
    public function setLogger(\_PhpScoper716f383f1097\Psr\Log\LoggerInterface $logger);
}
