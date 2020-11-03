<?php

namespace _PhpScoper503cab241f82\Psr\Log;

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
    public function setLogger(\_PhpScoper503cab241f82\Psr\Log\LoggerInterface $logger);
}
