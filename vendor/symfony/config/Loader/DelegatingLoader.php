<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera3f2f7450f99\Symfony\Component\Config\Loader;

use _PhpScopera3f2f7450f99\Symfony\Component\Config\Exception\LoaderLoadException;
/**
 * DelegatingLoader delegates loading to other loaders using a loader resolver.
 *
 * This loader acts as an array of LoaderInterface objects - each having
 * a chance to load a given resource (handled by the resolver)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DelegatingLoader extends \_PhpScopera3f2f7450f99\Symfony\Component\Config\Loader\Loader
{
    public function __construct(\_PhpScopera3f2f7450f99\Symfony\Component\Config\Loader\LoaderResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }
    /**
     * {@inheritdoc}
     */
    public function load($resource, $type = null)
    {
        if (\false === ($loader = $this->resolver->resolve($resource, $type))) {
            throw new \_PhpScopera3f2f7450f99\Symfony\Component\Config\Exception\LoaderLoadException($resource, null, null, null, $type);
        }
        return $loader->load($resource, $type);
    }
    /**
     * {@inheritdoc}
     */
    public function supports($resource, $type = null)
    {
        return \false !== $this->resolver->resolve($resource, $type);
    }
}
