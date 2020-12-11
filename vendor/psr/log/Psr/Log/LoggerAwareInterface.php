<?php

namespace _PhpScoper018f70acf6cc\Psr\Log;

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
    public function setLogger(\_PhpScoper018f70acf6cc\Psr\Log\LoggerInterface $logger);
}
