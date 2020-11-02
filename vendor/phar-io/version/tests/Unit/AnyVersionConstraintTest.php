<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercdfd316eda69\PharIo\Version;

use _PhpScopercdfd316eda69\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScopercdfd316eda69\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScopercdfd316eda69\PharIo\Version\Version('1.0.2')], [new \_PhpScopercdfd316eda69\PharIo\Version\Version('4.8')], [new \_PhpScopercdfd316eda69\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScopercdfd316eda69\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScopercdfd316eda69\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScopercdfd316eda69\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
