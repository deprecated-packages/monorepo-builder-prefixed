<?php

namespace _PhpScoper3a1deaf87850\Psr\Log;

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
    public function setLogger(\_PhpScoper3a1deaf87850\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
