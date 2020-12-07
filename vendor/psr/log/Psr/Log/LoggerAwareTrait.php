<?php

namespace _PhpScoperab93339c6bca\Psr\Log;

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
    public function setLogger(\_PhpScoperab93339c6bca\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
