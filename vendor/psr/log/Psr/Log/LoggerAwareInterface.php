<?php

namespace _PhpScoper764e721c42e8\Psr\Log;

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
    public function setLogger(\_PhpScoper764e721c42e8\Psr\Log\LoggerInterface $logger);
}
