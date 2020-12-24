<?php

namespace _PhpScoperf237fc62366a\Psr\Log;

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
    public function setLogger(\_PhpScoperf237fc62366a\Psr\Log\LoggerInterface $logger);
}
