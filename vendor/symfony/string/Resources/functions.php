<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper472361b15529\Symfony\Component\String;

function u(string $string = '') : \_PhpScoper472361b15529\Symfony\Component\String\UnicodeString
{
    return new \_PhpScoper472361b15529\Symfony\Component\String\UnicodeString($string);
}
function b(string $string = '') : \_PhpScoper472361b15529\Symfony\Component\String\ByteString
{
    return new \_PhpScoper472361b15529\Symfony\Component\String\ByteString($string);
}
/**
 * @return UnicodeString|ByteString
 */
function s(string $string) : \_PhpScoper472361b15529\Symfony\Component\String\AbstractString
{
    return \preg_match('//u', $string) ? new \_PhpScoper472361b15529\Symfony\Component\String\UnicodeString($string) : new \_PhpScoper472361b15529\Symfony\Component\String\ByteString($string);
}