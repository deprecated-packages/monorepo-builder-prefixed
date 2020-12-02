<?php

namespace _PhpScoper056b892061ac\Psr\Log;

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
    public function setLogger(\_PhpScoper056b892061ac\Psr\Log\LoggerInterface $logger);
}
