<?php

namespace _PhpScoper9b3b288e828e\Psr\Log;

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
    public function setLogger(\_PhpScoper9b3b288e828e\Psr\Log\LoggerInterface $logger);
}
