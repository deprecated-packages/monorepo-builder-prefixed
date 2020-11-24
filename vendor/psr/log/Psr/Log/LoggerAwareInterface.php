<?php

namespace _PhpScoper674b08d66902\Psr\Log;

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
    public function setLogger(\_PhpScoper674b08d66902\Psr\Log\LoggerInterface $logger);
}
