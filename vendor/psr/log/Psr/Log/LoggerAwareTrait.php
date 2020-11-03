<?php

namespace _PhpScoperddf2171d3d2c\Psr\Log;

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
    public function setLogger(\_PhpScoperddf2171d3d2c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
