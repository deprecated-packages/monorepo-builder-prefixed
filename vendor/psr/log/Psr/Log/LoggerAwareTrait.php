<?php

namespace _PhpScoper23507306fdfc\Psr\Log;

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
    public function setLogger(\_PhpScoper23507306fdfc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
