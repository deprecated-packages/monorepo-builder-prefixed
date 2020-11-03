<?php

namespace _PhpScoperb3e4472dbe9b\Psr\Log;

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
    public function setLogger(\_PhpScoperb3e4472dbe9b\Psr\Log\LoggerInterface $logger);
}
