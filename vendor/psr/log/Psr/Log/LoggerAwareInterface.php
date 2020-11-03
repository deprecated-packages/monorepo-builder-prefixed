<?php

namespace _PhpScoper2a80719fd449\Psr\Log;

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
    public function setLogger(\_PhpScoper2a80719fd449\Psr\Log\LoggerInterface $logger);
}
