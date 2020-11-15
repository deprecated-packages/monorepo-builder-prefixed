<?php

namespace _PhpScoper4a734d287afc\Psr\Log;

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
    public function setLogger(\_PhpScoper4a734d287afc\Psr\Log\LoggerInterface $logger);
}
