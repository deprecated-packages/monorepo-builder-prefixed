<?php

namespace _PhpScoper95e170f0b4ac\Psr\Log;

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
    public function setLogger(\_PhpScoper95e170f0b4ac\Psr\Log\LoggerInterface $logger);
}
