<?php

namespace _PhpScoper43a95e2f69bc\Psr\Log;

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
    public function setLogger(\_PhpScoper43a95e2f69bc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
