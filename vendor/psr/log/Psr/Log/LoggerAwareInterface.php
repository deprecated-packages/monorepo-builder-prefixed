<?php

namespace _PhpScoper8e7700b08cb9\Psr\Log;

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
    public function setLogger(\_PhpScoper8e7700b08cb9\Psr\Log\LoggerInterface $logger);
}
