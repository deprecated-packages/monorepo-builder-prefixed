<?php

namespace _PhpScoper462f168ef4cc\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper462f168ef4cc\Psr\Log\LoggerInterface $logger);
}
