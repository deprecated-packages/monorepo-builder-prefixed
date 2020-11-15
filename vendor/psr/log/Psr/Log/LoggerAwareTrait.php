<?php

namespace _PhpScoper47ce95ac3375\Psr\Log;

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
    public function setLogger(\_PhpScoper47ce95ac3375\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
