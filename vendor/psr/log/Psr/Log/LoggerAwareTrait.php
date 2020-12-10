<?php

namespace _PhpScoper37010f304ea9\Psr\Log;

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
    public function setLogger(\_PhpScoper37010f304ea9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
