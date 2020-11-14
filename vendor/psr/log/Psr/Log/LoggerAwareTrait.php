<?php

namespace _PhpScoperc35444adb584\Psr\Log;

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
    public function setLogger(\_PhpScoperc35444adb584\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
