<?php

namespace _PhpScoper37b79542cc43\Psr\Log;

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
    public function setLogger(\_PhpScoper37b79542cc43\Psr\Log\LoggerInterface $logger);
}
