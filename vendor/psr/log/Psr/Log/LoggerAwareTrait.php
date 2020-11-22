<?php

namespace _PhpScoper29aa9f1ba53d\Psr\Log;

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
    public function setLogger(\_PhpScoper29aa9f1ba53d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
