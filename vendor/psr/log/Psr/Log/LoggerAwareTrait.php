<?php

namespace _PhpScoperaf523e5605cc\Psr\Log;

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
    public function setLogger(\_PhpScoperaf523e5605cc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
