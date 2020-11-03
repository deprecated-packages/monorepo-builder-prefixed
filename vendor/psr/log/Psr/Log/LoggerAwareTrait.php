<?php

namespace _PhpScoper4c089bfbbc1b\Psr\Log;

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
    public function setLogger(\_PhpScoper4c089bfbbc1b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
