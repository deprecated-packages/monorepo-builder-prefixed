<?php

namespace _PhpScoper95efb8ddea2f\Psr\Log;

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
    public function setLogger(\_PhpScoper95efb8ddea2f\Psr\Log\LoggerInterface $logger);
}
