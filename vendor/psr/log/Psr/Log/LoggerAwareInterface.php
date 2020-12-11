<?php

namespace _PhpScoper7d795aa8de8d\Psr\Log;

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
    public function setLogger(\_PhpScoper7d795aa8de8d\Psr\Log\LoggerInterface $logger);
}
