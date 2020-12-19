<?php

namespace _PhpScoperb0229f14f861\Psr\Log;

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
    public function setLogger(\_PhpScoperb0229f14f861\Psr\Log\LoggerInterface $logger);
}
