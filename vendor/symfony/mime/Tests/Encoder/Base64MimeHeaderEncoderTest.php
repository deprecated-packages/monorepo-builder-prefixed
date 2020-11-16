<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperafeb7177e88e\PHPUnit\Framework\TestCase;
use _PhpScoperafeb7177e88e\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperafeb7177e88e\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperafeb7177e88e\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
