<?php

namespace _PhpScoperfa7966ff486f\Psr\Log;

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
    public function setLogger(\_PhpScoperfa7966ff486f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
