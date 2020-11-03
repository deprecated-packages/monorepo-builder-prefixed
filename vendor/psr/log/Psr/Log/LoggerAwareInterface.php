<?php

namespace _PhpScoperba481e4bff85\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoperba481e4bff85\Psr\Log\LoggerInterface $logger);
}
