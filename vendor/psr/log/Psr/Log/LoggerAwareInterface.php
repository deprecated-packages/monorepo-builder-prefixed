<?php

namespace _PhpScoper290ab17573f9\Psr\Log;

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
    public function setLogger(\_PhpScoper290ab17573f9\Psr\Log\LoggerInterface $logger);
}
