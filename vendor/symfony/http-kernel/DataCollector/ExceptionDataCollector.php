<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere0f28e6b9bde\Symfony\Component\HttpKernel\DataCollector;

use _PhpScopere0f28e6b9bde\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\Request;
use _PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\Response;
/**
 * ExceptionDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.4
 */
class ExceptionDataCollector extends \_PhpScopere0f28e6b9bde\Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    /**
     * {@inheritdoc}
     *
     * @param \Throwable|null $exception
     */
    public function collect(\_PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\Request $request, \_PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\Response $response)
    {
        $exception = 2 < \func_num_args() ? \func_get_arg(2) : null;
        if (null !== $exception) {
            $this->data = ['exception' => \_PhpScopere0f28e6b9bde\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception)];
        }
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        $this->data = [];
    }
    /**
     * Checks if the exception is not null.
     *
     * @return bool true if the exception is not null, false otherwise
     */
    public function hasException()
    {
        return isset($this->data['exception']);
    }
    /**
     * Gets the exception.
     *
     * @return \Exception|FlattenException
     */
    public function getException()
    {
        return $this->data['exception'];
    }
    /**
     * Gets the exception message.
     *
     * @return string The exception message
     */
    public function getMessage()
    {
        return $this->data['exception']->getMessage();
    }
    /**
     * Gets the exception code.
     *
     * @return int The exception code
     */
    public function getCode()
    {
        return $this->data['exception']->getCode();
    }
    /**
     * Gets the status code.
     *
     * @return int The status code
     */
    public function getStatusCode()
    {
        return $this->data['exception']->getStatusCode();
    }
    /**
     * Gets the exception trace.
     *
     * @return array The exception trace
     */
    public function getTrace()
    {
        return $this->data['exception']->getTrace();
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'exception';
    }
}
