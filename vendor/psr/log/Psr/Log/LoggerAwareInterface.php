<?php

namespace _PhpScoper9693ff52999d\Psr\Log;

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
    public function setLogger(\_PhpScoper9693ff52999d\Psr\Log\LoggerInterface $logger);
}
