<?php

namespace _PhpScoper44b9ade4c89e\Psr\Log;

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
    public function setLogger(\_PhpScoper44b9ade4c89e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
