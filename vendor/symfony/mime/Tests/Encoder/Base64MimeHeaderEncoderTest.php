<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperac0a9a33ae94\PHPUnit\Framework\TestCase;
use _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperac0a9a33ae94\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
