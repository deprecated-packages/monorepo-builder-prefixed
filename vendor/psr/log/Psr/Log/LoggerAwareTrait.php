<?php

namespace _PhpScoper120e1a259c7c\Psr\Log;

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
    public function setLogger(\_PhpScoper120e1a259c7c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
