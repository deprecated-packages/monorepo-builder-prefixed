<?php

namespace _PhpScoper416e75c46c6e\Psr\Log;

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
    public function setLogger(\_PhpScoper416e75c46c6e\Psr\Log\LoggerInterface $logger);
}
