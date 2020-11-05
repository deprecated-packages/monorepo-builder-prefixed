<?php

namespace _PhpScoperb445cd48032c\Psr\Log;

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
    public function setLogger(\_PhpScoperb445cd48032c\Psr\Log\LoggerInterface $logger);
}
