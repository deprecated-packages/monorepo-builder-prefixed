<?php

namespace _PhpScoper905a278e297d\Psr\Log;

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
    public function setLogger(\_PhpScoper905a278e297d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
