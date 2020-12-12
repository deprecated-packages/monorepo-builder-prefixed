<?php

namespace _PhpScoperd72531165ef5\Psr\Log;

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
    public function setLogger(\_PhpScoperd72531165ef5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
