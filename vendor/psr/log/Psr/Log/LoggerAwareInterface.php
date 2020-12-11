<?php

namespace _PhpScoper82732e472d5e\Psr\Log;

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
    public function setLogger(\_PhpScoper82732e472d5e\Psr\Log\LoggerInterface $logger);
}
