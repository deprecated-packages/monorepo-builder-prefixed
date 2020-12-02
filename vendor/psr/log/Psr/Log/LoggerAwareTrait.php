<?php

namespace _PhpScoper9ea409d355af\Psr\Log;

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
    public function setLogger(\_PhpScoper9ea409d355af\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
