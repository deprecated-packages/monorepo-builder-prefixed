<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf78d2b40800e\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperf78d2b40800e\PHPUnit\Framework\TestCase;
use _PhpScoperf78d2b40800e\Symfony\Component\Mime\Message;
use _PhpScoperf78d2b40800e\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperf78d2b40800e\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperf78d2b40800e\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperf78d2b40800e\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperf78d2b40800e\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperf78d2b40800e\Symfony\Component\Mime\Message()), $b = new \_PhpScoperf78d2b40800e\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperf78d2b40800e\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
