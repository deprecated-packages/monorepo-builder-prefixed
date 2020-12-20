<?php

namespace _PhpScoperb2257feafd7d\Psr\Log;

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
    public function setLogger(\_PhpScoperb2257feafd7d\Psr\Log\LoggerInterface $logger);
}
