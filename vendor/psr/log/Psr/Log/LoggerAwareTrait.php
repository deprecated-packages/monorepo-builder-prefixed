<?php

namespace _PhpScoper7cc068f3f5d1\Psr\Log;

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
    public function setLogger(\_PhpScoper7cc068f3f5d1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
