<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper472361b15529\Symfony\Component\HttpFoundation\Session\Storage\Handler;

use _PhpScoper472361b15529\Symfony\Component\Cache\Marshaller\MarshallerInterface;
/**
 * @author Ahmed TAILOULOUTE <ahmed.tailouloute@gmail.com>
 */
class MarshallingSessionHandler implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface
{
    private $handler;
    private $marshaller;
    public function __construct(\_PhpScoper472361b15529\Symfony\Component\HttpFoundation\Session\Storage\Handler\AbstractSessionHandler $handler, \_PhpScoper472361b15529\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller)
    {
        $this->handler = $handler;
        $this->marshaller = $marshaller;
    }
    /**
     * {@inheritdoc}
     */
    public function open($savePath, $name)
    {
        return $this->handler->open($savePath, $name);
    }
    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return $this->handler->close();
    }
    /**
     * {@inheritdoc}
     */
    public function destroy($sessionId)
    {
        return $this->handler->destroy($sessionId);
    }
    /**
     * {@inheritdoc}
     */
    public function gc($maxlifetime)
    {
        return $this->handler->gc($maxlifetime);
    }
    /**
     * {@inheritdoc}
     */
    public function read($sessionId)
    {
        return $this->marshaller->unmarshall($this->handler->read($sessionId));
    }
    /**
     * {@inheritdoc}
     */
    public function write($sessionId, $data)
    {
        $failed = [];
        $marshalledData = $this->marshaller->marshall(['data' => $data], $failed);
        if (isset($failed['data'])) {
            return \false;
        }
        return $this->handler->write($sessionId, $marshalledData['data']);
    }
    /**
     * {@inheritdoc}
     */
    public function validateId($sessionId)
    {
        return $this->handler->validateId($sessionId);
    }
    /**
     * {@inheritdoc}
     */
    public function updateTimestamp($sessionId, $data)
    {
        return $this->handler->updateTimestamp($sessionId, $data);
    }
}