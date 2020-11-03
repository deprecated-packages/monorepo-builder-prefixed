<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab3ccffcffcd\PharIo\Version;

use _PhpScoperab3ccffcffcd\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScoperab3ccffcffcd\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScoperab3ccffcffcd\PharIo\Version\Version('1.0.2')], [new \_PhpScoperab3ccffcffcd\PharIo\Version\Version('4.8')], [new \_PhpScoperab3ccffcffcd\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScoperab3ccffcffcd\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperab3ccffcffcd\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScoperab3ccffcffcd\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
