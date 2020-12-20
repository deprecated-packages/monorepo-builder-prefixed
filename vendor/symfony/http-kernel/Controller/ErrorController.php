<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb73fd1606666\Symfony\Component\HttpKernel\Controller;

use _PhpScoperb73fd1606666\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface;
use _PhpScoperb73fd1606666\Symfony\Component\HttpFoundation\Request;
use _PhpScoperb73fd1606666\Symfony\Component\HttpFoundation\Response;
use _PhpScoperb73fd1606666\Symfony\Component\HttpKernel\Exception\HttpException;
use _PhpScoperb73fd1606666\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Renders error or exception pages from a given FlattenException.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ErrorController
{
    private $kernel;
    private $controller;
    private $errorRenderer;
    public function __construct(\_PhpScoperb73fd1606666\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, $controller, \_PhpScoperb73fd1606666\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface $errorRenderer)
    {
        $this->kernel = $kernel;
        $this->controller = $controller;
        $this->errorRenderer = $errorRenderer;
    }
    public function __invoke(\Throwable $exception) : \_PhpScoperb73fd1606666\Symfony\Component\HttpFoundation\Response
    {
        $exception = $this->errorRenderer->render($exception);
        return new \_PhpScoperb73fd1606666\Symfony\Component\HttpFoundation\Response($exception->getAsString(), $exception->getStatusCode(), $exception->getHeaders());
    }
    public function preview(\_PhpScoperb73fd1606666\Symfony\Component\HttpFoundation\Request $request, int $code) : \_PhpScoperb73fd1606666\Symfony\Component\HttpFoundation\Response
    {
        /*
         * This Request mimics the parameters set by
         * \Symfony\Component\HttpKernel\EventListener\ErrorListener::duplicateRequest, with
         * the additional "showException" flag.
         */
        $subRequest = $request->duplicate(null, null, ['_controller' => $this->controller, 'exception' => new \_PhpScoperb73fd1606666\Symfony\Component\HttpKernel\Exception\HttpException($code, 'This is a sample exception.'), 'logger' => null, 'showException' => \false]);
        return $this->kernel->handle($subRequest, \_PhpScoperb73fd1606666\Symfony\Component\HttpKernel\HttpKernelInterface::SUB_REQUEST);
    }
}
