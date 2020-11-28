<?php

namespace _PhpScoper31c74f11c4b8\Psr\Log;

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
    public function setLogger(\_PhpScoper31c74f11c4b8\Psr\Log\LoggerInterface $logger);
}
