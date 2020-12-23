<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere0f28e6b9bde\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopere0f28e6b9bde\PHPUnit\Framework\TestCase;
use _PhpScopere0f28e6b9bde\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopere0f28e6b9bde\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopere0f28e6b9bde\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
