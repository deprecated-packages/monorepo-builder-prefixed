<?php

namespace _PhpScoper84d68f9a1b63\Psr\Log;

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
    public function setLogger(\_PhpScoper84d68f9a1b63\Psr\Log\LoggerInterface $logger);
}
