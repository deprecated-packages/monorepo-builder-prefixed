<?php

namespace _PhpScoper450cfab1c22b\Psr\Log;

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
    public function setLogger(\_PhpScoper450cfab1c22b\Psr\Log\LoggerInterface $logger);
}
