<?php

namespace _PhpScoper8a4bdaafa6ec\Psr\Log;

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
    public function setLogger(\_PhpScoper8a4bdaafa6ec\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
