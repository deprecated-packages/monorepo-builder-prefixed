<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper0c743797b8e7\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper0c743797b8e7\PHPUnit\Framework\TestCase;
use _PhpScoper0c743797b8e7\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScoper0c743797b8e7\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoper0c743797b8e7\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
