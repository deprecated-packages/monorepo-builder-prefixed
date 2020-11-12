<?php

namespace _PhpScoperad3f32c1b87c;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperad3f32c1b87c\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScoperad3f32c1b87c\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScoperad3f32c1b87c\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScoperad3f32c1b87c\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScoperad3f32c1b87c\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScoperad3f32c1b87c\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        die(1);
    }
}
