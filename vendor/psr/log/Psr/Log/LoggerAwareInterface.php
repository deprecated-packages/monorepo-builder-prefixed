<?php

namespace _PhpScoper6b2f62f5c7a4\Psr\Log;

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
    public function setLogger(\_PhpScoper6b2f62f5c7a4\Psr\Log\LoggerInterface $logger);
}
