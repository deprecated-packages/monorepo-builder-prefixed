<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere846b54512fc\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopere846b54512fc\PHPUnit\Framework\TestCase;
use _PhpScopere846b54512fc\Symfony\Component\Mime\Part\Multipart\MixedPart;
class MixedPartTest extends \_PhpScopere846b54512fc\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScopere846b54512fc\Symfony\Component\Mime\Part\Multipart\MixedPart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('mixed', $a->getMediaSubtype());
    }
}
