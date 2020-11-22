<?php

namespace _PhpScoper30f4a2553084\Psr\Log;

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
    public function setLogger(\_PhpScoper30f4a2553084\Psr\Log\LoggerInterface $logger);
}
