<?php

namespace _PhpScoper056b892061ac\Psr\Log;

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
    public function setLogger(\_PhpScoper056b892061ac\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
