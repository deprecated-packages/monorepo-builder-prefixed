<?php

namespace _PhpScoper5efd9ec7ae1e\Psr\Log;

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
    public function setLogger(\_PhpScoper5efd9ec7ae1e\Psr\Log\LoggerInterface $logger);
}
