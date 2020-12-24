<?php

namespace _PhpScoper2f9b0ac741dd\Psr\Log;

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
    public function setLogger(\_PhpScoper2f9b0ac741dd\Psr\Log\LoggerInterface $logger);
}
