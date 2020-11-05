<?php

namespace _PhpScoperf78d2b40800e\Psr\Log;

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
    public function setLogger(\_PhpScoperf78d2b40800e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
