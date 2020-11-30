<?php

namespace _PhpScoper2e873f93a162\Psr\Log;

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
    public function setLogger(\_PhpScoper2e873f93a162\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
