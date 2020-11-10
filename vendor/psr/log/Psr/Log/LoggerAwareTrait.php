<?php

namespace _PhpScopera2bd9a9af620\Psr\Log;

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
    public function setLogger(\_PhpScopera2bd9a9af620\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
