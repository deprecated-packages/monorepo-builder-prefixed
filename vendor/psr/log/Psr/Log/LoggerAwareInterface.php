<?php

namespace _PhpScoper31b05558ad5c\Psr\Log;

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
    public function setLogger(\_PhpScoper31b05558ad5c\Psr\Log\LoggerInterface $logger);
}
