<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopereb7fcd8f999a\PHPUnit\Framework\TestCase;
use _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopereb7fcd8f999a\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
