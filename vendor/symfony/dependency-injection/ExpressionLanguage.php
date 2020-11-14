<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection;

use _PhpScopera2f1d1d42b88\Psr\Cache\CacheItemPoolInterface;
use _PhpScopera2f1d1d42b88\Symfony\Component\ExpressionLanguage\ExpressionLanguage as BaseExpressionLanguage;
if (!\class_exists(\_PhpScopera2f1d1d42b88\Symfony\Component\ExpressionLanguage\ExpressionLanguage::class)) {
    return;
}
/**
 * Adds some function to the default ExpressionLanguage.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see ExpressionLanguageProvider
 */
class ExpressionLanguage extends \_PhpScopera2f1d1d42b88\Symfony\Component\ExpressionLanguage\ExpressionLanguage
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\_PhpScopera2f1d1d42b88\Psr\Cache\CacheItemPoolInterface $cache = null, array $providers = [], callable $serviceCompiler = null)
    {
        // prepend the default provider to let users override it easily
        \array_unshift($providers, new \_PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\ExpressionLanguageProvider($serviceCompiler));
        parent::__construct($cache, $providers);
    }
}
