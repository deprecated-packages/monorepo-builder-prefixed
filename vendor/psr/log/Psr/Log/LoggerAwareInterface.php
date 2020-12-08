<?php

namespace _PhpScoperfa13b4bfa005\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoperfa13b4bfa005\Psr\Log\LoggerInterface $logger);
}
