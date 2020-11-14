<?php

namespace _PhpScopera3f2f7450f99\Psr\Log;

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
    public function setLogger(\_PhpScopera3f2f7450f99\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
