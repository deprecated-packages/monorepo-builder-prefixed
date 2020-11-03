<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf2e2fcfe7ee6\PharIo\Version;

use _PhpScoperf2e2fcfe7ee6\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\ExactVersionConstraint
 */
class ExactVersionConstraintTest extends \_PhpScoperf2e2fcfe7ee6\PHPUnit\Framework\TestCase
{
    public function compliantVersionProvider()
    {
        return [['1.0.2', new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version('1.0.2')], ['4.8.9', new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version('4.8.9')], ['4.8', new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version('4.8')]];
    }
    public function nonCompliantVersionProvider()
    {
        return [['1.0.2', new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version('1.0.3')], ['4.8.9', new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version('4.7.9')], ['4.8', new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version('4.8.5')]];
    }
    /**
     * @dataProvider compliantVersionProvider
     *
     * @param string $constraintValue
     * @param Version $version
     */
    public function testReturnsTrueForCompliantVersion($constraintValue, \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\ExactVersionConstraint($constraintValue);
        $this->assertTrue($constraint->complies($version));
    }
    /**
     * @dataProvider nonCompliantVersionProvider
     *
     * @param string $constraintValue
     * @param Version $version
     */
    public function testReturnsFalseForNonCompliantVersion($constraintValue, \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\ExactVersionConstraint($constraintValue);
        $this->assertFalse($constraint->complies($version));
    }
}
