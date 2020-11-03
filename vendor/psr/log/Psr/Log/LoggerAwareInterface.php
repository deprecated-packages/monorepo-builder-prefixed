<?php

namespace _PhpScoperf1163522a13e\Psr\Log;

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
    public function setLogger(\_PhpScoperf1163522a13e\Psr\Log\LoggerInterface $logger);
}
