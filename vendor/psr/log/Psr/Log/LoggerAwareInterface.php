<?php

namespace _PhpScoper955845c5b45f\Psr\Log;

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
    public function setLogger(\_PhpScoper955845c5b45f\Psr\Log\LoggerInterface $logger);
}
