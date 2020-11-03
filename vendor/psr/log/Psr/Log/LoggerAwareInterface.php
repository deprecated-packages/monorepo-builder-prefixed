<?php

namespace _PhpScoper0f10ad97259b\Psr\Log;

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
    public function setLogger(\_PhpScoper0f10ad97259b\Psr\Log\LoggerInterface $logger);
}
