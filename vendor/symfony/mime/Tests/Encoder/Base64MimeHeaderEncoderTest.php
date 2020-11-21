<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb56893078f23\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperb56893078f23\PHPUnit\Framework\TestCase;
use _PhpScoperb56893078f23\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperb56893078f23\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperb56893078f23\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
