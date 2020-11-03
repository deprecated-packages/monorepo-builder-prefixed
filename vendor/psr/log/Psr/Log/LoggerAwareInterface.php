<?php

namespace _PhpScoper6bfbe5ea8949\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper6bfbe5ea8949\Psr\Log\LoggerInterface $logger);
}
