<?php

namespace _PhpScoperb2724c6b069f\Psr\Log;

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
    public function setLogger(\_PhpScoperb2724c6b069f\Psr\Log\LoggerInterface $logger);
}
