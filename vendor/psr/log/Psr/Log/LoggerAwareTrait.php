<?php

namespace _PhpScoper62894f8143f4\Psr\Log;

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
    public function setLogger(\_PhpScoper62894f8143f4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
