<?php

namespace _PhpScoper9aac61c94bdb\Psr\Log;

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
    public function setLogger(\_PhpScoper9aac61c94bdb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
