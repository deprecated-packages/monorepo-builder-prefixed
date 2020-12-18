<?php

namespace _PhpScoper0ce3ac6864aa\Psr\Log;

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
    public function setLogger(\_PhpScoper0ce3ac6864aa\Psr\Log\LoggerInterface $logger);
}
