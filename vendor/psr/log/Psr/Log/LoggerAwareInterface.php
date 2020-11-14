<?php

namespace _PhpScoperb2110b0b3130\Psr\Log;

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
    public function setLogger(\_PhpScoperb2110b0b3130\Psr\Log\LoggerInterface $logger);
}
