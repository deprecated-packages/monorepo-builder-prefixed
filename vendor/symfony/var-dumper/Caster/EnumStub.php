<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9b905ab040d4\Symfony\Component\VarDumper\Caster;

use _PhpScoper9b905ab040d4\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Represents an enumeration of values.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class EnumStub extends \_PhpScoper9b905ab040d4\Symfony\Component\VarDumper\Cloner\Stub
{
    public $dumpKeys = \true;
    public function __construct(array $values, bool $dumpKeys = \true)
    {
        $this->value = $values;
        $this->dumpKeys = $dumpKeys;
    }
}
