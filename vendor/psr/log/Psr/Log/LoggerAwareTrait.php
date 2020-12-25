<?php

namespace _PhpScoper9b3b288e828e\Psr\Log;

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
    public function setLogger(\_PhpScoper9b3b288e828e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
