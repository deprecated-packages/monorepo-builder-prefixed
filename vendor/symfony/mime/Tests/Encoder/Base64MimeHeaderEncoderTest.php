<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad5317739bda\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperad5317739bda\PHPUnit\Framework\TestCase;
use _PhpScoperad5317739bda\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperad5317739bda\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperad5317739bda\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
