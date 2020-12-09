<?php

namespace _PhpScoper62cf10e7b378\Psr\Log;

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
    public function setLogger(\_PhpScoper62cf10e7b378\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
