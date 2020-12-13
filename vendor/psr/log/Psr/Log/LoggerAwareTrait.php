<?php

namespace _PhpScoper09a4cc789a22\Psr\Log;

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
    public function setLogger(\_PhpScoper09a4cc789a22\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
