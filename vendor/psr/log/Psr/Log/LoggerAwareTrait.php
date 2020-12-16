<?php

namespace _PhpScoper00f012948171\Psr\Log;

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
    public function setLogger(\_PhpScoper00f012948171\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
