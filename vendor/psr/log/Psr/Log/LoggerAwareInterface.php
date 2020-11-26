<?php

namespace _PhpScoper1f602fe576f8\Psr\Log;

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
    public function setLogger(\_PhpScoper1f602fe576f8\Psr\Log\LoggerInterface $logger);
}
