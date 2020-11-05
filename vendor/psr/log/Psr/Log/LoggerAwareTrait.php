<?php

namespace _PhpScoper47e141fb470a\Psr\Log;

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
    public function setLogger(\_PhpScoper47e141fb470a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
