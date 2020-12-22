<?php

namespace _PhpScoper621af75be782\Psr\Log;

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
    public function setLogger(\_PhpScoper621af75be782\Psr\Log\LoggerInterface $logger);
}
