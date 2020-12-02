<?php

namespace _PhpScopercd844fca8af3\Psr\Log;

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
    public function setLogger(\_PhpScopercd844fca8af3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
