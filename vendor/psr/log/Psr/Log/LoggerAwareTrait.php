<?php

namespace _PhpScoper416e75c46c6e\Psr\Log;

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
    public function setLogger(\_PhpScoper416e75c46c6e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
