<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere6fd569fd43f\Symfony\Component\VarDumper\Caster;

use _PhpScopere6fd569fd43f\Ramsey\Uuid\UuidInterface;
use _PhpScopere6fd569fd43f\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class UuidCaster
{
    public static function castRamseyUuid(\_PhpScopere6fd569fd43f\Ramsey\Uuid\UuidInterface $c, array $a, \_PhpScopere6fd569fd43f\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested) : array
    {
        $a += [\_PhpScopere6fd569fd43f\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'uuid' => (string) $c];
        return $a;
    }
}
