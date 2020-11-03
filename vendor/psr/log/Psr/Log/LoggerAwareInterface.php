<?php

namespace _PhpScoper8204af15e2b3\Psr\Log;

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
    public function setLogger(\_PhpScoper8204af15e2b3\Psr\Log\LoggerInterface $logger);
}
