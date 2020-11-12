<?php

namespace _PhpScoperb0f70d760c3d\Psr\Log;

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
    public function setLogger(\_PhpScoperb0f70d760c3d\Psr\Log\LoggerInterface $logger);
}
