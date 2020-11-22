<?php

namespace _PhpScoper9a721f934eeb\Psr\Log;

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
    public function setLogger(\_PhpScoper9a721f934eeb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
