<?php

namespace _PhpScoper437fa56c88e1\Psr\Log;

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
    public function setLogger(\_PhpScoper437fa56c88e1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
