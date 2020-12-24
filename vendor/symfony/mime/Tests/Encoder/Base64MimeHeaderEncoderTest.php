<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf237fc62366a\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperf237fc62366a\PHPUnit\Framework\TestCase;
use _PhpScoperf237fc62366a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperf237fc62366a\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperf237fc62366a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
