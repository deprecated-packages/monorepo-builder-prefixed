<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Tests\Console\Command;

use Iterator;
use _PhpScopera00544d51e07\PHPUnit\Framework\TestCase;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
final class CommandNamingTest extends \_PhpScopera00544d51e07\PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider provideDataForClassToName()
     */
    public function test(string $commandClass, string $expectedCommandName) : void
    {
        $this->assertSame($expectedCommandName, \Symplify\PackageBuilder\Console\Command\CommandNaming::classToName($commandClass));
    }
    public function provideDataForClassToName() : \Iterator
    {
        (yield ['SomeNameCommand', 'some-name']);
        (yield ['_PhpScopera00544d51e07\\AlsoNamespace\\SomeNameCommand', 'some-name']);
        (yield ['_PhpScopera00544d51e07\\AlsoNamespace\\ECSCommand', 'ecs']);
        (yield ['_PhpScopera00544d51e07\\AlsoNamespace\\PHPStanCommand', 'php-stan']);
    }
}
