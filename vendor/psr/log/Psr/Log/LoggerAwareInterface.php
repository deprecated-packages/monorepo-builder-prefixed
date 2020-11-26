<?php

namespace _PhpScoper27e2e7523871\Psr\Log;

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
    public function setLogger(\_PhpScoper27e2e7523871\Psr\Log\LoggerInterface $logger);
}
