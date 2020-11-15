<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4a734d287afc\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper4a734d287afc\PHPUnit\Framework\TestCase;
use _PhpScoper4a734d287afc\Symfony\Component\Mime\Part\Multipart\MixedPart;
class MixedPartTest extends \_PhpScoper4a734d287afc\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoper4a734d287afc\Symfony\Component\Mime\Part\Multipart\MixedPart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('mixed', $a->getMediaSubtype());
    }
}
