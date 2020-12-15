<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc0c27da9e1f7\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\RedirectResponse;
use _PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\Response;
use _PhpScoperc0c27da9e1f7\Symfony\Component\HttpKernel\Event\FilterControllerEvent;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends \_PhpScoperc0c27da9e1f7\Symfony\Component\HttpKernel\DataCollector\DataCollector
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
     * @param \Throwable|null $exception
     *
     * @final since Symfony 4.4
     */
    public function collect(\_PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\Response $response)
    {
        if ($response instanceof \_PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\RedirectResponse) {
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
    protected function guessRoute(\_PhpScoperc0c27da9e1f7\Symfony\Component\HttpFoundation\Request $request, $controller)
    {
        return 'n/a';
    }
    /**
     * Remembers the controller associated to each request.
     *
     * @final since Symfony 4.3
     */
    public function onKernelController(\_PhpScoperc0c27da9e1f7\Symfony\Component\HttpKernel\Event\FilterControllerEvent $event)
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
