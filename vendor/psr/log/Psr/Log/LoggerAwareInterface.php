<?php

namespace _PhpScoper4ef7335528ad\Psr\Log;

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
    public function setLogger(\_PhpScoper4ef7335528ad\Psr\Log\LoggerInterface $logger);
}
