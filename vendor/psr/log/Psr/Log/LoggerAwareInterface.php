<?php

namespace _PhpScoper3b1a4d12ef28\Psr\Log;

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
    public function setLogger(\_PhpScoper3b1a4d12ef28\Psr\Log\LoggerInterface $logger);
}
