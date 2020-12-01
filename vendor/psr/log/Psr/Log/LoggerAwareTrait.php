<?php

namespace _PhpScoperd8a347ec1761\Psr\Log;

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
    public function setLogger(\_PhpScoperd8a347ec1761\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
