<?php

namespace _PhpScoper354754c20063\Psr\Log;

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
    public function setLogger(\_PhpScoper354754c20063\Psr\Log\LoggerInterface $logger);
}
