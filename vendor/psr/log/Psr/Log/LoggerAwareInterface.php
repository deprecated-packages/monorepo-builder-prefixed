<?php

namespace _PhpScoperb25e75e9febe\Psr\Log;

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
    public function setLogger(\_PhpScoperb25e75e9febe\Psr\Log\LoggerInterface $logger);
}
