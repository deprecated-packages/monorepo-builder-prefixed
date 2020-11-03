<?php

namespace _PhpScoper15dc67236b17\Psr\Log;

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
    public function setLogger(\_PhpScoper15dc67236b17\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
