<?php

namespace _PhpScoperdfdcb3d4cca0\Psr\Log;

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
    public function setLogger(\_PhpScoperdfdcb3d4cca0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
