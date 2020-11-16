<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdfa889d8967a\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperdfa889d8967a\PHPUnit\Framework\TestCase;
use _PhpScoperdfa889d8967a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperdfa889d8967a\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
