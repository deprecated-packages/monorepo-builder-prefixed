<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaf523e5605cc\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperaf523e5605cc\PHPUnit\Framework\TestCase;
use _PhpScoperaf523e5605cc\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperaf523e5605cc\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
