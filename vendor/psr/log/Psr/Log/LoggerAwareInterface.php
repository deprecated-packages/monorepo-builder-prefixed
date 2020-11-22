<?php

namespace _PhpScoper51570eac51fe\Psr\Log;

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
    public function setLogger(\_PhpScoper51570eac51fe\Psr\Log\LoggerInterface $logger);
}
