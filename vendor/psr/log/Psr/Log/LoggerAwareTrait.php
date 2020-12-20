<?php

namespace _PhpScoperc84013ed9ae7\Psr\Log;

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
    public function setLogger(\_PhpScoperc84013ed9ae7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
