<?php

namespace _PhpScoper7606a7c2799b\Psr\Log;

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
    public function setLogger(\_PhpScoper7606a7c2799b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
