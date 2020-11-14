<?php

namespace _PhpScoperef4638f5d8b1\Psr\Log;

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
    public function setLogger(\_PhpScoperef4638f5d8b1\Psr\Log\LoggerInterface $logger);
}
