<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\PharIo\Version;

use _PhpScoperafeb7177e88e\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScoperafeb7177e88e\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScoperafeb7177e88e\PharIo\Version\Version('1.0.2')], [new \_PhpScoperafeb7177e88e\PharIo\Version\Version('4.8')], [new \_PhpScoperafeb7177e88e\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScoperafeb7177e88e\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperafeb7177e88e\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScoperafeb7177e88e\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
