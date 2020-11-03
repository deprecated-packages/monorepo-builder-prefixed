<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use _PhpScoperba481e4bff85\Symfony\Component\Stopwatch\Stopwatch;
/**
 * Provides timing information via the stopwatch.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class TraceableValueResolver implements \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    private $inner;
    private $stopwatch;
    public function __construct(\_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface $inner, \_PhpScoperba481e4bff85\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->inner = $inner;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        $method = \get_class($this->inner) . '::' . __FUNCTION__;
        $this->stopwatch->start($method, 'controller.argument_value_resolver');
        $return = $this->inner->supports($request, $argument);
        $this->stopwatch->stop($method);
        return $return;
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        $method = \get_class($this->inner) . '::' . __FUNCTION__;
        $this->stopwatch->start($method, 'controller.argument_value_resolver');
        yield from $this->inner->resolve($request, $argument);
        $this->stopwatch->stop($method);
    }
}
