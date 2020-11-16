<?php

namespace _PhpScoper29d04ea58d14\Psr\Log;

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
    public function setLogger(\_PhpScoper29d04ea58d14\Psr\Log\LoggerInterface $logger);
}
