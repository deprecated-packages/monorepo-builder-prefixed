<?php

namespace _PhpScoper03a47c44ad4f\Psr\Log;

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
    public function setLogger(\_PhpScoper03a47c44ad4f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
