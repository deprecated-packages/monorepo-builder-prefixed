<?php

namespace _PhpScoper44b9ade4c89e\Psr\Log;

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
    public function setLogger(\_PhpScoper44b9ade4c89e\Psr\Log\LoggerInterface $logger);
}
