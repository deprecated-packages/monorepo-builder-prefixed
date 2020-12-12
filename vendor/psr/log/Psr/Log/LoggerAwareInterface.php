<?php

namespace _PhpScoper59bf8deb8cc1\Psr\Log;

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
    public function setLogger(\_PhpScoper59bf8deb8cc1\Psr\Log\LoggerInterface $logger);
}
