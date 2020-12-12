<?php

namespace _PhpScoperad5317739bda\Psr\Log;

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
    public function setLogger(\_PhpScoperad5317739bda\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
