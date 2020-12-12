<?php

namespace _PhpScoperc693a7d83f11\Psr\Log;

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
    public function setLogger(\_PhpScoperc693a7d83f11\Psr\Log\LoggerInterface $logger);
}
