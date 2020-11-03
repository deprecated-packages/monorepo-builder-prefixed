<?php

namespace _PhpScoper43a95e2f69bc\Psr\Log;

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
    public function setLogger(\_PhpScoper43a95e2f69bc\Psr\Log\LoggerInterface $logger);
}
