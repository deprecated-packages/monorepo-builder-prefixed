<?php

namespace _PhpScoper7d1be3c5de07\Psr\Log;

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
    public function setLogger(\_PhpScoper7d1be3c5de07\Psr\Log\LoggerInterface $logger);
}
