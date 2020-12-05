<?php

namespace _PhpScoperc1a0b7b3175f\Psr\Log;

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
    public function setLogger(\_PhpScoperc1a0b7b3175f\Psr\Log\LoggerInterface $logger);
}
