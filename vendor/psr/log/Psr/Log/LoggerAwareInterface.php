<?php

namespace _PhpScoper5da899d87662\Psr\Log;

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
    public function setLogger(\_PhpScoper5da899d87662\Psr\Log\LoggerInterface $logger);
}
