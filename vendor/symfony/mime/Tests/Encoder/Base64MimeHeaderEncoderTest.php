<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf40000691b7b\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperf40000691b7b\PHPUnit\Framework\TestCase;
use _PhpScoperf40000691b7b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperf40000691b7b\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperf40000691b7b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
