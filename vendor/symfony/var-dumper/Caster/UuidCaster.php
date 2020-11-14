<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3901c1bd2445\Symfony\Component\VarDumper\Caster;

use _PhpScoper3901c1bd2445\Ramsey\Uuid\UuidInterface;
use _PhpScoper3901c1bd2445\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class UuidCaster
{
    public static function castRamseyUuid(\_PhpScoper3901c1bd2445\Ramsey\Uuid\UuidInterface $c, array $a, \_PhpScoper3901c1bd2445\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested) : array
    {
        $a += [\_PhpScoper3901c1bd2445\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'uuid' => (string) $c];
        return $a;
    }
}
