<?php

namespace _PhpScopere6d124d1f7ba\Psr\Log;

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
    public function setLogger(\_PhpScopere6d124d1f7ba\Psr\Log\LoggerInterface $logger);
}
