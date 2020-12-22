<?php

namespace _PhpScoper674f850a9604\Psr\Log;

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
    public function setLogger(\_PhpScoper674f850a9604\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
