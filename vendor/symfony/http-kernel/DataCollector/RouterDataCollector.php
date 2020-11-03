<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf48ea5df9e9b\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\RedirectResponse;
use _PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\Request;
use _PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\Response;
use _PhpScoperf48ea5df9e9b\Symfony\Component\HttpKernel\Event\ControllerEvent;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends \_PhpScoperf48ea5df9e9b\Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    /**
     * @var \SplObjectStorage
     */
    protected $controllers;
    public function __construct()
    {
        $this->reset();
    }
    /**
     * {@inheritdoc}
     *
     * @final
     */
    public function collect(\_PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null)
    {
        if ($response instanceof \_PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\RedirectResponse) {
            $this->data['redirect'] = \true;
            $this->data['url'] = $response->getTargetUrl();
            if ($this->controllers->contains($request)) {
                $this->data['route'] = $this->guessRoute($request, $this->controllers[$request]);
            }
        }
        unset($this->controllers[$request]);
    }
    public function reset()
    {
        $this->controllers = new \SplObjectStorage();
        $this->data = ['redirect' => \false, 'url' => null, 'route' => null];
    }
    protected function guessRoute(\_PhpScoperf48ea5df9e9b\Symfony\Component\HttpFoundation\Request $request, $controller)
    {
        return 'n/a';
    }
    /**
     * Remembers the controller associated to each request.
     */
    public function onKernelController(\_PhpScoperf48ea5df9e9b\Symfony\Component\HttpKernel\Event\ControllerEvent $event)
    {
        $this->controllers[$event->getRequest()] = $event->getController();
    }
    /**
     * @return bool Whether this request will result in a redirect
     */
    public function getRedirect()
    {
        return $this->data['redirect'];
    }
    /**
     * @return string|null The target URL
     */
    public function getTargetUrl()
    {
        return $this->data['url'];
    }
    /**
     * @return string|null The target route
     */
    public function getTargetRoute()
    {
        return $this->data['route'];
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
