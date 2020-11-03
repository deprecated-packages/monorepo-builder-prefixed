<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf1163522a13e\PharIo\Version;

use _PhpScoperf1163522a13e\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScoperf1163522a13e\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScoperf1163522a13e\PharIo\Version\Version('1.0.2')], [new \_PhpScoperf1163522a13e\PharIo\Version\Version('4.8')], [new \_PhpScoperf1163522a13e\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScoperf1163522a13e\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperf1163522a13e\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScoperf1163522a13e\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
