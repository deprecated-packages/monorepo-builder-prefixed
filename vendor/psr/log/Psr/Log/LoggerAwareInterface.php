<?php

namespace _PhpScoper3c696cbcc510\Psr\Log;

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
    public function setLogger(\_PhpScoper3c696cbcc510\Psr\Log\LoggerInterface $logger);
}
