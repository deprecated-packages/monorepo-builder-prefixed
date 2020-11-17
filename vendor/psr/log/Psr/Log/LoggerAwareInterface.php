<?php

namespace _PhpScoper6786b40fc02e\Psr\Log;

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
    public function setLogger(\_PhpScoper6786b40fc02e\Psr\Log\LoggerInterface $logger);
}
