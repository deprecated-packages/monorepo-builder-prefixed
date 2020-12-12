<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper;

use _PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Definition;
/**
 * Null dumper, negates any proxy code generation for any given service definition.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @final
 */
class NullDumper implements \_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper\DumperInterface
{
    /**
     * {@inheritdoc}
     */
    public function isProxyCandidate(\_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Definition $definition) : bool
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     */
    public function getProxyFactoryCode(\_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Definition $definition, string $id, string $factoryCode) : string
    {
        return '';
    }
    /**
     * {@inheritdoc}
     */
    public function getProxyCode(\_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Definition $definition) : string
    {
        return '';
    }
}
