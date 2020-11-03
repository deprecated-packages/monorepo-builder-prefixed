<?php

namespace _PhpScoper3a1deaf87850\Psr\Log;

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
    public function setLogger(\_PhpScoper3a1deaf87850\Psr\Log\LoggerInterface $logger);
}
