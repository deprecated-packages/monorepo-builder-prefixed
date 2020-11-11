<?php

namespace _PhpScoper5e83c3f77e04\Psr\Log;

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
    public function setLogger(\_PhpScoper5e83c3f77e04\Psr\Log\LoggerInterface $logger);
}
