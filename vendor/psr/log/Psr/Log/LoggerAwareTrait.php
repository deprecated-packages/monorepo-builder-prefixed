<?php

namespace _PhpScoper540e5a7ff813\Psr\Log;

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
    public function setLogger(\_PhpScoper540e5a7ff813\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
