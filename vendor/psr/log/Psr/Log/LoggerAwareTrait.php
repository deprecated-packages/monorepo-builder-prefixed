<?php

namespace _PhpScoper018f70acf6cc\Psr\Log;

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
    public function setLogger(\_PhpScoper018f70acf6cc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
