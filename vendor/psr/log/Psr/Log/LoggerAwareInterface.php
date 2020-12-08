<?php

namespace _PhpScoper78864f032ec6\Psr\Log;

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
    public function setLogger(\_PhpScoper78864f032ec6\Psr\Log\LoggerInterface $logger);
}
