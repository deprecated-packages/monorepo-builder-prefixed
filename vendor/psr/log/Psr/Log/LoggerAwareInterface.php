<?php

namespace _PhpScoper3ceab9fdc42a\Psr\Log;

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
    public function setLogger(\_PhpScoper3ceab9fdc42a\Psr\Log\LoggerInterface $logger);
}
