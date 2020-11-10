<?php

namespace _PhpScoper7371f586a1d2\Psr\Log;

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
    public function setLogger(\_PhpScoper7371f586a1d2\Psr\Log\LoggerInterface $logger);
}
