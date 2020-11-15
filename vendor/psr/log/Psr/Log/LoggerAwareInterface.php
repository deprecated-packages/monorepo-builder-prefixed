<?php

namespace _PhpScoper31a2d0e8f655\Psr\Log;

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
    public function setLogger(\_PhpScoper31a2d0e8f655\Psr\Log\LoggerInterface $logger);
}
