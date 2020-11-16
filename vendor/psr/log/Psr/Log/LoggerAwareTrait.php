<?php

namespace _PhpScoper244a857c31f6\Psr\Log;

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
    public function setLogger(\_PhpScoper244a857c31f6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
