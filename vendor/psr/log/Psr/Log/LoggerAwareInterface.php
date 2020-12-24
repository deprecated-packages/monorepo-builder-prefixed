<?php

namespace _PhpScoper7aa910bab0da\Psr\Log;

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
    public function setLogger(\_PhpScoper7aa910bab0da\Psr\Log\LoggerInterface $logger);
}
