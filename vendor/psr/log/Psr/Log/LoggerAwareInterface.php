<?php

namespace _PhpScoper1ceaf4cbd5cb\Psr\Log;

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
    public function setLogger(\_PhpScoper1ceaf4cbd5cb\Psr\Log\LoggerInterface $logger);
}
