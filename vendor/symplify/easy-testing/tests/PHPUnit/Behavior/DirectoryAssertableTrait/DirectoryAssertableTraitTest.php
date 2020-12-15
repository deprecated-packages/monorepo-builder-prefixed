<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\PHPUnit\Behavior\DirectoryAssertableTrait;

use _PhpScoperd79f30a2f8be\PHPUnit\Framework\ExpectationFailedException;
use _PhpScoperd79f30a2f8be\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\PHPUnit\Behavior\DirectoryAssertableTrait;
use Throwable;
final class DirectoryAssertableTraitTest extends \_PhpScoperd79f30a2f8be\PHPUnit\Framework\TestCase
{
    use DirectoryAssertableTrait;
    public function testSuccess() : void
    {
        $this->assertDirectoryEquals(__DIR__ . '/Fixture/first_directory', __DIR__ . '/Fixture/second_directory');
    }
    public function testFail() : void
    {
        $throwable = null;
        try {
            $this->assertDirectoryEquals(__DIR__ . '/Fixture/first_directory', __DIR__ . '/Fixture/third_directory');
        } catch (\Throwable $throwable) {
        } finally {
            $this->assertInstanceOf(\_PhpScoperd79f30a2f8be\PHPUnit\Framework\ExpectationFailedException::class, $throwable);
        }
    }
}
