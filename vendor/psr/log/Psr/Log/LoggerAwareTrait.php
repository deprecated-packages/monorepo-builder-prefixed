<?php

namespace _PhpScoperd3e9cfbe9d90\Psr\Log;

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
    public function setLogger(\_PhpScoperd3e9cfbe9d90\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
