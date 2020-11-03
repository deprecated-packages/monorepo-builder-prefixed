<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere4e8aecb81b9\PharIo\Version;

use _PhpScopere4e8aecb81b9\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\SpecificMajorVersionConstraint
 */
class SpecificMajorVersionConstraintTest extends \_PhpScopere4e8aecb81b9\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [
            // compliant versions
            [1, new \_PhpScopere4e8aecb81b9\PharIo\Version\Version('1.0.2'), \true],
            [1, new \_PhpScopere4e8aecb81b9\PharIo\Version\Version('1.0.3'), \true],
            [1, new \_PhpScopere4e8aecb81b9\PharIo\Version\Version('1.1.1'), \true],
            // non-compliant versions
            [2, new \_PhpScopere4e8aecb81b9\PharIo\Version\Version('0.9.9'), \false],
            [3, new \_PhpScopere4e8aecb81b9\PharIo\Version\Version('2.2.3'), \false],
            [3, new \_PhpScopere4e8aecb81b9\PharIo\Version\Version('2.9.9'), \false],
        ];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param int $major
     * @param Version $version
     * @param bool $expectedResult
     */
    public function testReturnsTrueForCompliantVersions($major, \_PhpScopere4e8aecb81b9\PharIo\Version\Version $version, $expectedResult)
    {
        $constraint = new \_PhpScopere4e8aecb81b9\PharIo\Version\SpecificMajorVersionConstraint('foo', $major);
        $this->assertSame($expectedResult, $constraint->complies($version));
    }
}
