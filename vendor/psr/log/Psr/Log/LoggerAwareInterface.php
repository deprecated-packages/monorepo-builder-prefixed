<?php

namespace _PhpScoperf0b2c071f15d\Psr\Log;

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
    public function setLogger(\_PhpScoperf0b2c071f15d\Psr\Log\LoggerInterface $logger);
}
