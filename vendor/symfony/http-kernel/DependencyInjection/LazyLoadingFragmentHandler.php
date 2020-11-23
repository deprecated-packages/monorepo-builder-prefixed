<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperc9dc9dec1b4a\Psr\Container\ContainerInterface;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Fragment\FragmentHandler;
/**
 * Lazily loads fragment renderers from the dependency injection container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LazyLoadingFragmentHandler extends \_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Fragment\FragmentHandler
{
    private $container;
    private $initialized = [];
    public function __construct(\_PhpScoperc9dc9dec1b4a\Psr\Container\ContainerInterface $container, \_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\RequestStack $requestStack, bool $debug = \false)
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
