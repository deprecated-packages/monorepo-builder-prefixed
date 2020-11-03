<?php

namespace _PhpScoperd0ff379dfdc7\Psr\Log;

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
    public function setLogger(\_PhpScoperd0ff379dfdc7\Psr\Log\LoggerInterface $logger);
}
