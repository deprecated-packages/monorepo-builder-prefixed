<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc0c27da9e1f7\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperc0c27da9e1f7\PHPUnit\Framework\TestCase;
use _PhpScoperc0c27da9e1f7\Symfony\Component\Mime\Part\Multipart\MixedPart;
class MixedPartTest extends \_PhpScoperc0c27da9e1f7\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoperc0c27da9e1f7\Symfony\Component\Mime\Part\Multipart\MixedPart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('mixed', $a->getMediaSubtype());
    }
}
