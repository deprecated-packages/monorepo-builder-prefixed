<?php

namespace _PhpScopere6d124d1f7ba\Psr\Log;

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
    public function setLogger(\_PhpScopere6d124d1f7ba\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
