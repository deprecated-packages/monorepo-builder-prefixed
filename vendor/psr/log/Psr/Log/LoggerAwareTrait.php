<?php

namespace _PhpScoper847a0f3260b6\Psr\Log;

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
    public function setLogger(\_PhpScoper847a0f3260b6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
