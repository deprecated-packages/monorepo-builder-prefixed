<?php

namespace _PhpScopere6fd569fd43f\Psr\Log;

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
    public function setLogger(\_PhpScopere6fd569fd43f\Psr\Log\LoggerInterface $logger);
}
