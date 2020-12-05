<?php

namespace _PhpScopereaa086e6f852\Psr\Log;

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
    public function setLogger(\_PhpScopereaa086e6f852\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
