<?php

namespace _PhpScoper23507306fdfc\Psr\Log;

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
    public function setLogger(\_PhpScoper23507306fdfc\Psr\Log\LoggerInterface $logger);
}
