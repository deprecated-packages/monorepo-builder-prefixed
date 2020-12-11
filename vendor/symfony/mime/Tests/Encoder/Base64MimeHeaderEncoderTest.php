<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbecbc4cd500f\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperbecbc4cd500f\PHPUnit\Framework\TestCase;
use _PhpScoperbecbc4cd500f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperbecbc4cd500f\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperbecbc4cd500f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
