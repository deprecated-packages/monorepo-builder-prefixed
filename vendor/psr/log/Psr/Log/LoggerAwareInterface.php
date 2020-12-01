<?php

namespace _PhpScoper8293d234e7ed\Psr\Log;

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
    public function setLogger(\_PhpScoper8293d234e7ed\Psr\Log\LoggerInterface $logger);
}
