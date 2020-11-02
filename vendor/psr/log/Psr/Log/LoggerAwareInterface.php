<?php

namespace _PhpScopercdfd316eda69\Psr\Log;

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
    public function setLogger(\_PhpScopercdfd316eda69\Psr\Log\LoggerInterface $logger);
}
