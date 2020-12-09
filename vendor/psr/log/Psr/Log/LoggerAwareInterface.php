<?php

namespace _PhpScoper62cf10e7b378\Psr\Log;

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
    public function setLogger(\_PhpScoper62cf10e7b378\Psr\Log\LoggerInterface $logger);
}
