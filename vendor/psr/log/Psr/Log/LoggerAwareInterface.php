<?php

namespace _PhpScoper69b0f14b2eca\Psr\Log;

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
    public function setLogger(\_PhpScoper69b0f14b2eca\Psr\Log\LoggerInterface $logger);
}
