<?php

namespace _PhpScoper3d314ab2cab4\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper3d314ab2cab4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
