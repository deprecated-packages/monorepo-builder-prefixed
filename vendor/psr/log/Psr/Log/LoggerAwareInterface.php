<?php

namespace _PhpScoper963537526adf\Psr\Log;

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
    public function setLogger(\_PhpScoper963537526adf\Psr\Log\LoggerInterface $logger);
}
