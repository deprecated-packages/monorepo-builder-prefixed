<?php

namespace _PhpScoper76c4aa553101\Psr\Log;

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
    public function setLogger(\_PhpScoper76c4aa553101\Psr\Log\LoggerInterface $logger);
}
