<?php

namespace _PhpScoper204b3b8f3e0d\Psr\Log;

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
    public function setLogger(\_PhpScoper204b3b8f3e0d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
