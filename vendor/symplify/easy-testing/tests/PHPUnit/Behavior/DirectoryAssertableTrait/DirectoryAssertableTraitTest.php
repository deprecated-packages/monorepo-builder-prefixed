<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\PHPUnit\Behavior\DirectoryAssertableTrait;

use _PhpScopera2ff5fd2b59c\PHPUnit\Framework\ExpectationFailedException;
use _PhpScopera2ff5fd2b59c\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\PHPUnit\Behavior\DirectoryAssertableTrait;
use Throwable;
final class DirectoryAssertableTraitTest extends \_PhpScopera2ff5fd2b59c\PHPUnit\Framework\TestCase
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
            $this->assertInstanceOf(\_PhpScopera2ff5fd2b59c\PHPUnit\Framework\ExpectationFailedException::class, $throwable);
        }
    }
}
