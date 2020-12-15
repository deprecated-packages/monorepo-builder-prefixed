<?php

namespace _PhpScoper345e6b5f632f\Psr\Log;

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
    public function setLogger(\_PhpScoper345e6b5f632f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
