<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper955845c5b45f\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper955845c5b45f\Psr\Container\ContainerInterface;
use _PhpScoper955845c5b45f\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoper955845c5b45f\Symfony\Component\HttpKernel\Fragment\FragmentHandler;
/**
 * Lazily loads fragment renderers from the dependency injection container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LazyLoadingFragmentHandler extends \_PhpScoper955845c5b45f\Symfony\Component\HttpKernel\Fragment\FragmentHandler
{
    private $container;
    private $initialized = [];
    public function __construct(\_PhpScoper955845c5b45f\Psr\Container\ContainerInterface $container, \_PhpScoper955845c5b45f\Symfony\Component\HttpFoundation\RequestStack $requestStack, bool $debug = \false)
    {
        $this->container = $container;
        parent::__construct($requestStack, [], $debug);
    }
    /**
     * {@inheritdoc}
     */
    public function render($uri, $renderer = 'inline', array $options = [])
    {
        if (!isset($this->initialized[$renderer]) && $this->container->has($renderer)) {
            $this->addRenderer($this->container->get($renderer));
            $this->initialized[$renderer] = \true;
        }
        return parent::render($uri, $renderer, $options);
    }
}
