<?php

namespace _PhpScoper1411c9dba342\Psr\Log;

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
    public function setLogger(\_PhpScoper1411c9dba342\Psr\Log\LoggerInterface $logger);
}
