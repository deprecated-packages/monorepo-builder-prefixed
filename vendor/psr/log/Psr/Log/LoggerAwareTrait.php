<?php

namespace _PhpScoper9b5fd937b4d9\Psr\Log;

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
    public function setLogger(\_PhpScoper9b5fd937b4d9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
