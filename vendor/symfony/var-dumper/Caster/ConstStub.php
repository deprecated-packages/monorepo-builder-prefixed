<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera4d786bbd33f\Symfony\Component\VarDumper\Caster;

use _PhpScopera4d786bbd33f\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Represents a PHP constant and its value.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ConstStub extends \_PhpScopera4d786bbd33f\Symfony\Component\VarDumper\Cloner\Stub
{
    public function __construct(string $name, $value = null)
    {
        $this->class = $name;
        $this->value = 1 < \func_num_args() ? $value : $name;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }
}
