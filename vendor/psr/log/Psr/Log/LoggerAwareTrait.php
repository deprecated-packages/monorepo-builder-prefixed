<?php

namespace _PhpScoper777981beaf84\Psr\Log;

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
    public function setLogger(\_PhpScoper777981beaf84\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
