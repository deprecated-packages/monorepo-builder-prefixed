<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdfa889d8967a\PharIo\Version;

use _PhpScoperdfa889d8967a\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScoperdfa889d8967a\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScoperdfa889d8967a\PharIo\Version\Version('1.0.2')], [new \_PhpScoperdfa889d8967a\PharIo\Version\Version('4.8')], [new \_PhpScoperdfa889d8967a\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScoperdfa889d8967a\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperdfa889d8967a\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScoperdfa889d8967a\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
