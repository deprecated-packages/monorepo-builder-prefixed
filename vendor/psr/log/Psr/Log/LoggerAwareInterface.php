<?php

namespace _PhpScoper5f41da07187c\Psr\Log;

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
    public function setLogger(\_PhpScoper5f41da07187c\Psr\Log\LoggerInterface $logger);
}
