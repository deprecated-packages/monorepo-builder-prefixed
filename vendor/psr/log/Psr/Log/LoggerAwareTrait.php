<?php

namespace _PhpScoper6713430bfe3d\Psr\Log;

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
    public function setLogger(\_PhpScoper6713430bfe3d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
