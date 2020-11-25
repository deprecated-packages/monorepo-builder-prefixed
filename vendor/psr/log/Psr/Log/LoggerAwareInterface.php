<?php

namespace _PhpScoper7609e473a4cb\Psr\Log;

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
    public function setLogger(\_PhpScoper7609e473a4cb\Psr\Log\LoggerInterface $logger);
}
