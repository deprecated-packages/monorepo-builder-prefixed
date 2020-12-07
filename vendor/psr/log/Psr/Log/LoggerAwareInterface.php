<?php

namespace _PhpScopercd5c1af09a49\Psr\Log;

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
    public function setLogger(\_PhpScopercd5c1af09a49\Psr\Log\LoggerInterface $logger);
}
