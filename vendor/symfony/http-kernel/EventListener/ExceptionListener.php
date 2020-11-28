<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperbe77f3b0e77d\Psr\Log\LoggerInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScoperbe77f3b0e77d\Symfony\Component\EventDispatcher\EventDispatcherInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpKernelInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.4, use "ErrorListener" instead.', \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\EventListener\ExceptionListener::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.4, use ErrorListener instead
 */
class ExceptionListener implements \_PhpScoperbe77f3b0e77d\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    protected $controller;
    protected $logger;
    protected $debug;
    public function __construct($controller, \_PhpScoperbe77f3b0e77d\Psr\Log\LoggerInterface $logger = null, $debug = \false)
    {
        $this->controller = $controller;
        $this->logger = $logger;
        $this->debug = $debug;
    }
    public function logKernelException(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent $event)
    {
        $e = \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($event->getException());
        $this->logException($event->getException(), \sprintf('Uncaught PHP Exception %s: "%s" at %s line %s', $e->getClass(), $e->getMessage(), $e->getFile(), $e->getLine()));
    }
    public function onKernelException(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent $event)
    {
        if (null === $this->controller) {
            return;
        }
        $exception = $event->getException();
        $request = $this->duplicateRequest($exception, $event->getRequest());
        $eventDispatcher = \func_num_args() > 2 ? \func_get_arg(2) : null;
        try {
            $response = $event->getKernel()->handle($request, \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpKernelInterface::SUB_REQUEST, \false);
        } catch (\Exception $e) {
            $f = \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($e);
            $this->logException($e, \sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', $f->getClass(), $f->getMessage(), $e->getFile(), $e->getLine()));
            $prev = $e;
            do {
                if ($exception === ($wrapper = $prev)) {
                    throw $e;
                }
            } while ($prev = $wrapper->getPrevious());
            $prev = new \ReflectionProperty($wrapper instanceof \Exception ? \Exception::class : \Error::class, 'previous');
            $prev->setAccessible(\true);
            $prev->setValue($wrapper, $exception);
            throw $e;
        }
        $event->setResponse($response);
        if ($this->debug && $eventDispatcher instanceof \_PhpScoperbe77f3b0e77d\Symfony\Component\EventDispatcher\EventDispatcherInterface) {
            $cspRemovalListener = function ($event) use(&$cspRemovalListener, $eventDispatcher) {
                $event->getResponse()->headers->remove('Content-Security-Policy');
                $eventDispatcher->removeListener(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\KernelEvents::RESPONSE, $cspRemovalListener);
            };
            $eventDispatcher->addListener(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\KernelEvents::RESPONSE, $cspRemovalListener, -128);
        }
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\KernelEvents::EXCEPTION => [['logKernelException', 0], ['onKernelException', -128]]];
    }
    /**
     * Logs an exception.
     *
     * @param \Exception $exception The \Exception instance
     * @param string     $message   The error message to log
     */
    protected function logException(\Exception $exception, $message)
    {
        if (null !== $this->logger) {
            if (!$exception instanceof \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface || $exception->getStatusCode() >= 500) {
                $this->logger->critical($message, ['exception' => $exception]);
            } else {
                $this->logger->error($message, ['exception' => $exception]);
            }
        }
    }
    /**
     * Clones the request for the exception.
     *
     * @return Request The cloned request
     */
    protected function duplicateRequest(\Exception $exception, \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request)
    {
        $attributes = ['_controller' => $this->controller, 'exception' => \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception), 'logger' => $this->logger instanceof \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Log\DebugLoggerInterface ? $this->logger : null];
        $request = $request->duplicate(null, null, $attributes);
        $request->setMethod('GET');
        return $request;
    }
}
