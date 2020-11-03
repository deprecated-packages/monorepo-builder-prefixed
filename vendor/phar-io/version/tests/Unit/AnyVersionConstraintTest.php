<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd9048e10aae\PharIo\Version;

use _PhpScoperdd9048e10aae\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScoperdd9048e10aae\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScoperdd9048e10aae\PharIo\Version\Version('1.0.2')], [new \_PhpScoperdd9048e10aae\PharIo\Version\Version('4.8')], [new \_PhpScoperdd9048e10aae\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScoperdd9048e10aae\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperdd9048e10aae\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScoperdd9048e10aae\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
