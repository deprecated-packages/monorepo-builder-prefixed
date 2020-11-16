<?php

namespace _PhpScoper1c1f12bbe5a7\Psr\Log;

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
    public function setLogger(\_PhpScoper1c1f12bbe5a7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
