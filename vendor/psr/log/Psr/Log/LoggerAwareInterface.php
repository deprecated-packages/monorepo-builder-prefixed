<?php

namespace _PhpScoper323d4c178bee\Psr\Log;

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
    public function setLogger(\_PhpScoper323d4c178bee\Psr\Log\LoggerInterface $logger);
}
