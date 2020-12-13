<?php

namespace _PhpScoper09a4cc789a22\Psr\Log;

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
    public function setLogger(\_PhpScoper09a4cc789a22\Psr\Log\LoggerInterface $logger);
}
