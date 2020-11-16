<?php

namespace _PhpScoper6f057cf7ca7c\Psr\Log;

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
    public function setLogger(\_PhpScoper6f057cf7ca7c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
