<?php

namespace _PhpScoperab3ccffcffcd;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperab3ccffcffcd\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScoperab3ccffcffcd\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScoperab3ccffcffcd\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScoperab3ccffcffcd\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScoperab3ccffcffcd\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScoperab3ccffcffcd\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        exit(1);
    }
}
