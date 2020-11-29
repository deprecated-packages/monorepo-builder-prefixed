<?php

namespace _PhpScoperf4997c409394\Psr\Log;

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
    public function setLogger(\_PhpScoperf4997c409394\Psr\Log\LoggerInterface $logger);
}
