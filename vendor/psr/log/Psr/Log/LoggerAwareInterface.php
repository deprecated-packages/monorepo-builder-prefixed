<?php

namespace _PhpScoper87c95ce1b4e5\Psr\Log;

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
    public function setLogger(\_PhpScoper87c95ce1b4e5\Psr\Log\LoggerInterface $logger);
}
