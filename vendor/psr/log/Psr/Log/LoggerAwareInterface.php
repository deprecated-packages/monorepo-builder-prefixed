<?php

namespace _PhpScopereb9e28d9f307\Psr\Log;

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
    public function setLogger(\_PhpScopereb9e28d9f307\Psr\Log\LoggerInterface $logger);
}
