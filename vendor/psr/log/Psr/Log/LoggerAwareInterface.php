<?php

namespace _PhpScoper77ed23b49cd3\Psr\Log;

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
    public function setLogger(\_PhpScoper77ed23b49cd3\Psr\Log\LoggerInterface $logger);
}
