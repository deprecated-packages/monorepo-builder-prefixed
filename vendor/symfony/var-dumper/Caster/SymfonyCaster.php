<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Caster;

use _PhpScopere3ed9f66440c\Symfony\Component\HttpFoundation\Request;
use _PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @final since Symfony 4.4
 */
class SymfonyCaster
{
    private static $requestGetters = ['pathInfo' => 'getPathInfo', 'requestUri' => 'getRequestUri', 'baseUrl' => 'getBaseUrl', 'basePath' => 'getBasePath', 'method' => 'getMethod', 'format' => 'getRequestFormat'];
    public static function castRequest(\_PhpScopere3ed9f66440c\Symfony\Component\HttpFoundation\Request $request, array $a, \_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $clone = null;
        foreach (self::$requestGetters as $prop => $getter) {
            $key = \_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Caster\Caster::PREFIX_PROTECTED . $prop;
            if (\array_key_exists($key, $a) && null === $a[$key]) {
                if (null === $clone) {
                    $clone = clone $request;
                }
                $a[\_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . $prop] = $clone->{$getter}();
            }
        }
        return $a;
    }
    public static function castHttpClient($client, array $a, \_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $multiKey = \sprintf("\0%s\0multi", \get_class($client));
        if (isset($a[$multiKey])) {
            $a[$multiKey] = new \_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Caster\CutStub($a[$multiKey]);
        }
        return $a;
    }
    public static function castHttpClientResponse($response, array $a, \_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $stub->cut += \count($a);
        $a = [];
        foreach ($response->getInfo() as $k => $v) {
            $a[\_PhpScopere3ed9f66440c\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . $k] = $v;
        }
        return $a;
    }
}
