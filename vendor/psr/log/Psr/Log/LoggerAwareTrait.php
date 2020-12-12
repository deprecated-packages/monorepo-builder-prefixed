<?php

namespace _PhpScoper59bf8deb8cc1\Psr\Log;

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
    public function setLogger(\_PhpScoper59bf8deb8cc1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
