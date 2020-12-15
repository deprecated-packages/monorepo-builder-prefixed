<?php

namespace _PhpScoperd79f30a2f8be\Psr\Log;

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
    public function setLogger(\_PhpScoperd79f30a2f8be\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
