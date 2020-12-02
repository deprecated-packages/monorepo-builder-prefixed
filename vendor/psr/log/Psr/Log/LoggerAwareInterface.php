<?php

namespace _PhpScopercd844fca8af3\Psr\Log;

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
    public function setLogger(\_PhpScopercd844fca8af3\Psr\Log\LoggerInterface $logger);
}
