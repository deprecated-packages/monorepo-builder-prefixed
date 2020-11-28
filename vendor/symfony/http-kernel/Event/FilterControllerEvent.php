<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event;

use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use ControllerEvent instead
 */
class FilterControllerEvent extends \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $controller;
    public function __construct(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, callable $controller, \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request, ?int $requestType)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setController($controller);
    }
    /**
     * Returns the current controller.
     *
     * @return callable
     */
    public function getController()
    {
        return $this->controller;
    }
    public function setController(callable $controller)
    {
        $this->controller = $controller;
    }
}
