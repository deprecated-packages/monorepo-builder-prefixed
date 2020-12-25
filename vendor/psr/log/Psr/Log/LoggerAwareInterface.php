<?php

namespace _PhpScoper8b183f8218dc\Psr\Log;

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
    public function setLogger(\_PhpScoper8b183f8218dc\Psr\Log\LoggerInterface $logger);
}
