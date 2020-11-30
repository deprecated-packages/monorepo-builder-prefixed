<?php

namespace _PhpScoper2e873f93a162\Psr\Log;

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
    public function setLogger(\_PhpScoper2e873f93a162\Psr\Log\LoggerInterface $logger);
}
