<?php

namespace _PhpScoperf8eaec7affbd\Psr\Log;

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
    public function setLogger(\_PhpScoperf8eaec7affbd\Psr\Log\LoggerInterface $logger);
}
