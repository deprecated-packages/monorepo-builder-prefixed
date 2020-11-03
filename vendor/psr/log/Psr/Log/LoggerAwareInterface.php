<?php

namespace _PhpScoper3d314ab2cab4\Psr\Log;

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
    public function setLogger(\_PhpScoper3d314ab2cab4\Psr\Log\LoggerInterface $logger);
}
