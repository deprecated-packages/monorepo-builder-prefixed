<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Caster;

use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @final since Symfony 4.4
 */
class SymfonyCaster
{
    private static $requestGetters = ['pathInfo' => 'getPathInfo', 'requestUri' => 'getRequestUri', 'baseUrl' => 'getBaseUrl', 'basePath' => 'getBasePath', 'method' => 'getMethod', 'format' => 'getRequestFormat'];
    public static function castRequest(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request, array $a, \_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $clone = null;
        foreach (self::$requestGetters as $prop => $getter) {
            $key = \_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_PROTECTED . $prop;
            if (\array_key_exists($key, $a) && null === $a[$key]) {
                if (null === $clone) {
                    $clone = clone $request;
                }
                $a[\_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . $prop] = $clone->{$getter}();
            }
        }
        return $a;
    }
    public static function castHttpClient($client, array $a, \_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $multiKey = \sprintf("\0%s\0multi", \get_class($client));
        if (isset($a[$multiKey])) {
            $a[$multiKey] = new \_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Caster\CutStub($a[$multiKey]);
        }
        return $a;
    }
    public static function castHttpClientResponse($response, array $a, \_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $stub->cut += \count($a);
        $a = [];
        foreach ($response->getInfo() as $k => $v) {
            $a[\_PhpScoperbe77f3b0e77d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . $k] = $v;
        }
        return $a;
    }
}
