<?php

namespace _PhpScoper68e56c1b5bd9\Psr\Log;

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
    public function setLogger(\_PhpScoper68e56c1b5bd9\Psr\Log\LoggerInterface $logger);
}
