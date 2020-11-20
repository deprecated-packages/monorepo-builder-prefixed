<?php

namespace _PhpScoperabca9a64438b\Psr\Log;

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
    public function setLogger(\_PhpScoperabca9a64438b\Psr\Log\LoggerInterface $logger);
}
