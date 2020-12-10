<?php

namespace _PhpScoper4f38ae1287f3\Psr\Log;

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
    public function setLogger(\_PhpScoper4f38ae1287f3\Psr\Log\LoggerInterface $logger);
}
