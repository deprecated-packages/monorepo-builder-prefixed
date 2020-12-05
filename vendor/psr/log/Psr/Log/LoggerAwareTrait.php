<?php

namespace _PhpScoper722a1d9fee2c\Psr\Log;

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
    public function setLogger(\_PhpScoper722a1d9fee2c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
