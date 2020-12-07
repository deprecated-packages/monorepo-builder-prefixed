<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopereb7fcd8f999a\PHPUnit\Framework\TestCase;
use _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScopereb7fcd8f999a\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
