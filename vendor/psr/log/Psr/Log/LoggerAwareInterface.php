<?php

namespace _PhpScoperabb8c88e9df1\Psr\Log;

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
    public function setLogger(\_PhpScoperabb8c88e9df1\Psr\Log\LoggerInterface $logger);
}
