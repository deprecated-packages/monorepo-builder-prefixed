<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperac0a9a33ae94\PHPUnit\Framework\TestCase;
use _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Message;
use _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperac0a9a33ae94\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Message()), $b = new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
