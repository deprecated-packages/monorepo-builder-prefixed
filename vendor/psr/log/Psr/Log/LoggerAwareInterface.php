<?php

namespace _PhpScoperc51531d67326\Psr\Log;

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
    public function setLogger(\_PhpScoperc51531d67326\Psr\Log\LoggerInterface $logger);
}
