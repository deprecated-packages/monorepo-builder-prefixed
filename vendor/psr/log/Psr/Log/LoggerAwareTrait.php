<?php

namespace _PhpScoper3c46f40844ed\Psr\Log;

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
    public function setLogger(\_PhpScoper3c46f40844ed\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
