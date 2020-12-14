<?php

namespace _PhpScoper14531b498d75\Psr\Log;

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
    public function setLogger(\_PhpScoper14531b498d75\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
