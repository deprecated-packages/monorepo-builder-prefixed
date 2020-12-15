<?php

namespace _PhpScoperc51531d67326\Psr\Log;

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
    public function setLogger(\_PhpScoperc51531d67326\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
