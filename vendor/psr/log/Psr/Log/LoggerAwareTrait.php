<?php

namespace _PhpScoper82732e472d5e\Psr\Log;

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
    public function setLogger(\_PhpScoper82732e472d5e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
