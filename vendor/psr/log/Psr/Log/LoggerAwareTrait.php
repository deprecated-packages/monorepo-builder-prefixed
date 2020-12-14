<?php

namespace _PhpScoper5f41da07187c\Psr\Log;

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
    public function setLogger(\_PhpScoper5f41da07187c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
