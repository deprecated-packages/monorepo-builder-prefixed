<?php

namespace _PhpScoperd659a053ca1c\Psr\Log;

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
    public function setLogger(\_PhpScoperd659a053ca1c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
