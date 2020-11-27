<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7d1be3c5de07\PharIo\Version;

use _PhpScoper7d1be3c5de07\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\GreaterThanOrEqualToVersionConstraint
 */
class GreaterThanOrEqualToVersionConstraintTest extends \_PhpScoper7d1be3c5de07\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [
            // compliant versions
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), \true],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.3'), \true],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.1.1'), \true],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('2.0.0'), \true],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.3'), \true],
            // non-compliant versions
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.0.1'), \false],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('1.9.8'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('0.9.9'), \false],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('2.3.1'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('2.2.3'), \false],
            [new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('3.0.2'), new \_PhpScoper7d1be3c5de07\PharIo\Version\Version('2.9.9'), \false],
        ];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $constraintVersion
     * @param Version $version
     * @param bool $expectedResult
     */
    public function testReturnsTrueForCompliantVersions(\_PhpScoper7d1be3c5de07\PharIo\Version\Version $constraintVersion, \_PhpScoper7d1be3c5de07\PharIo\Version\Version $version, $expectedResult)
    {
        $constraint = new \_PhpScoper7d1be3c5de07\PharIo\Version\GreaterThanOrEqualToVersionConstraint('foo', $constraintVersion);
        $this->assertSame($expectedResult, $constraint->complies($version));
    }
}
