<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\Tests;

use _PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\Exception\RuntimeException;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypeGuesserInterface;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypes;
/**
 * @requires extension fileinfo
 */
class MimeTypesTest extends \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypes();
    }
    public function testUnsupportedGuesser()
    {
        $guesser = $this->getGuesser();
        $guesser->registerGuesser(new class implements \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypeGuesserInterface
        {
            public function isGuesserSupported() : bool
            {
                return \false;
            }
            public function guessMimeType(string $mimeType) : ?string
            {
                throw new \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\Exception\RuntimeException('Should never be called.');
            }
        });
        $this->assertEquals('image/gif', $guesser->guessMimeType(__DIR__ . '/Fixtures/mimetypes/test'));
    }
    public function testGetExtensions()
    {
        $mt = new \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypes();
        $this->assertSame(['mbox'], $mt->getExtensions('application/mbox'));
        $this->assertSame(['ai', 'eps', 'ps'], $mt->getExtensions('application/postscript'));
        $this->assertSame([], $mt->getExtensions('application/whatever-symfony'));
    }
    public function testGetMimeTypes()
    {
        $mt = new \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\MimeTypes();
        $this->assertSame(['application/mbox'], $mt->getMimeTypes('mbox'));
        $this->assertContains('application/postscript', $mt->getMimeTypes('ai'));
        $this->assertContains('application/postscript', $mt->getMimeTypes('ps'));
        $this->assertSame([], $mt->getMimeTypes('symfony'));
    }
}