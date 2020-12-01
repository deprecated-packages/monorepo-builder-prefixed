<?php

namespace _PhpScoper1c9ce01e7be6\Psr\Log;

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
    public function setLogger(\_PhpScoper1c9ce01e7be6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
