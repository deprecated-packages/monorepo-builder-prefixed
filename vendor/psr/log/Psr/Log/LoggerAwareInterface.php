<?php

namespace _PhpScopera2c403aec9a8\Psr\Log;

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
    public function setLogger(\_PhpScopera2c403aec9a8\Psr\Log\LoggerInterface $logger);
}
