<?php

namespace _PhpScoperaff2103cee1d\Psr\Log;

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
    public function setLogger(\_PhpScoperaff2103cee1d\Psr\Log\LoggerInterface $logger);
}
