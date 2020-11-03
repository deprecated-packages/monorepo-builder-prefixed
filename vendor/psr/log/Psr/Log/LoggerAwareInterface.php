<?php

namespace _PhpScoperdd9048e10aae\Psr\Log;

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
    public function setLogger(\_PhpScoperdd9048e10aae\Psr\Log\LoggerInterface $logger);
}
