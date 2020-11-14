<?php

namespace _PhpScoper5861d582764b\Psr\Log;

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
    public function setLogger(\_PhpScoper5861d582764b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
