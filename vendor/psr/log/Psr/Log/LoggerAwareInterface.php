<?php

namespace _PhpScoper2f1e52375c65\Psr\Log;

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
    public function setLogger(\_PhpScoper2f1e52375c65\Psr\Log\LoggerInterface $logger);
}
