<?php

namespace _PhpScoper674f850a9604\Psr\Log;

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
    public function setLogger(\_PhpScoper674f850a9604\Psr\Log\LoggerInterface $logger);
}
