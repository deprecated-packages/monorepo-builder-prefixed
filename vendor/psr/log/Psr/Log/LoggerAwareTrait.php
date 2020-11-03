<?php

namespace _PhpScoper0f10ad97259b\Psr\Log;

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
    public function setLogger(\_PhpScoper0f10ad97259b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
