<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6bfbe5ea8949\Symfony\Component\VarDumper\Caster;

use _PhpScoper6bfbe5ea8949\ProxyManager\Proxy\ProxyInterface;
use _PhpScoper6bfbe5ea8949\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ProxyManagerCaster
{
    public static function castProxy(\_PhpScoper6bfbe5ea8949\ProxyManager\Proxy\ProxyInterface $c, array $a, \_PhpScoper6bfbe5ea8949\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
    {
        if ($parent = \get_parent_class($c)) {
            $stub->class .= ' - ' . $parent;
        }
        $stub->class .= '@proxy';
        return $a;
    }
}
