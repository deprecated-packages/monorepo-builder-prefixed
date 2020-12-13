<?php

namespace _PhpScoper3fb9389c704a\Psr\Log;

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
    public function setLogger(\_PhpScoper3fb9389c704a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
