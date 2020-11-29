<?php

namespace _PhpScoper9ca278c9ad44\Psr\Log;

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
    public function setLogger(\_PhpScoper9ca278c9ad44\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
