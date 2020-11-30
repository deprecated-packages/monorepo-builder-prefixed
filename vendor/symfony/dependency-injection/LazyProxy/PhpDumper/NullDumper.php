<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper;

use _PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\Definition;
/**
 * Null dumper, negates any proxy code generation for any given service definition.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @final
 */
class NullDumper implements \_PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper\DumperInterface
{
    /**
     * {@inheritdoc}
     */
    public function isProxyCandidate(\_PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\Definition $definition) : bool
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     */
    public function getProxyFactoryCode(\_PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\Definition $definition, string $id, string $factoryCode) : string
    {
        return '';
    }
    /**
     * {@inheritdoc}
     */
    public function getProxyCode(\_PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\Definition $definition) : string
    {
        return '';
    }
}
