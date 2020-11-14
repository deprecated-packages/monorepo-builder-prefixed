<?php

namespace _PhpScoper3901c1bd2445\Psr\Log;

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
    public function setLogger(\_PhpScoper3901c1bd2445\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
