<?php

namespace _PhpScoper6786b40fc02e\Psr\Log;

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
    public function setLogger(\_PhpScoper6786b40fc02e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
