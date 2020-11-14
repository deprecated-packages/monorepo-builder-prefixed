<?php

namespace _PhpScopere6fd569fd43f\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScopere6fd569fd43f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
