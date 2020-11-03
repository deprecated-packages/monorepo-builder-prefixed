<?php

namespace _PhpScoperd3e9cfbe9d90\Psr\Log;

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
    public function setLogger(\_PhpScoperd3e9cfbe9d90\Psr\Log\LoggerInterface $logger);
}
