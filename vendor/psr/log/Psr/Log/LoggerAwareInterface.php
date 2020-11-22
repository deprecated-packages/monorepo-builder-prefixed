<?php

namespace _PhpScoper29aa9f1ba53d\Psr\Log;

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
    public function setLogger(\_PhpScoper29aa9f1ba53d\Psr\Log\LoggerInterface $logger);
}
