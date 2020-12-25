<?php

namespace _PhpScoper36281e29f54f\Psr\Log;

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
    public function setLogger(\_PhpScoper36281e29f54f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
