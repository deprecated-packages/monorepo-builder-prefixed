<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper47e141fb470a\Symfony\Component\VarDumper\Caster;

use _PhpScoper47e141fb470a\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends \_PhpScoper47e141fb470a\Symfony\Component\VarDumper\Cloner\Stub
{
    public function __construct($key, $value)
    {
        $this->value = [\_PhpScoper47e141fb470a\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'key' => $key, \_PhpScoper47e141fb470a\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'value' => $value];
    }
}
