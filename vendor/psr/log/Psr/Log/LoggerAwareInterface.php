<?php

namespace _PhpScoperb73fd1606666\Psr\Log;

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
    public function setLogger(\_PhpScoperb73fd1606666\Psr\Log\LoggerInterface $logger);
}
