<?php

namespace _PhpScoperf701e46e48a5\Psr\Log;

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
    public function setLogger(\_PhpScoperf701e46e48a5\Psr\Log\LoggerInterface $logger);
}
