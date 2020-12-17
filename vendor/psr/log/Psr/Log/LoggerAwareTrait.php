<?php

namespace _PhpScoper39d95f01712b\Psr\Log;

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
    public function setLogger(\_PhpScoper39d95f01712b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
