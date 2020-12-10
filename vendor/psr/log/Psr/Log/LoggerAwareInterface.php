<?php

namespace _PhpScoperf4d251e01a80\Psr\Log;

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
    public function setLogger(\_PhpScoperf4d251e01a80\Psr\Log\LoggerInterface $logger);
}
