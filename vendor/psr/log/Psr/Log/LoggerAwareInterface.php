<?php

namespace _PhpScoperaf523e5605cc\Psr\Log;

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
    public function setLogger(\_PhpScoperaf523e5605cc\Psr\Log\LoggerInterface $logger);
}
