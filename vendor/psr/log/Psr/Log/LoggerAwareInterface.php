<?php

namespace _PhpScoper931cda798d50\Psr\Log;

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
    public function setLogger(\_PhpScoper931cda798d50\Psr\Log\LoggerInterface $logger);
}
