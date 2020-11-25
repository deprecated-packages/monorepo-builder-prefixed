<?php

namespace _PhpScoper54d694ea578e\Psr\Log;

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
    public function setLogger(\_PhpScoper54d694ea578e\Psr\Log\LoggerInterface $logger);
}
