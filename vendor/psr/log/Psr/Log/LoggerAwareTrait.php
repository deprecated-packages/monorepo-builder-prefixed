<?php

namespace _PhpScopera8413c4aa124\Psr\Log;

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
    public function setLogger(\_PhpScopera8413c4aa124\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
