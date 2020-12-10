<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\StaticFixtureSplitter;

use _PhpScoper4f38ae1287f3\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\StaticFixtureSplitter;
use Symplify\SmartFileSystem\SmartFileInfo;
final class StaticFixtureSplitterTest extends \_PhpScoper4f38ae1287f3\PHPUnit\Framework\TestCase
{
    public function test() : void
    {
        $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/simple_fixture.php.inc');
        $inputAndExpected = \Symplify\EasyTesting\StaticFixtureSplitter::splitFileInfoToInputAndExpected($fileInfo);
        $this->assertSame('a' . \PHP_EOL, $inputAndExpected->getInput());
        $this->assertSame('b' . \PHP_EOL, $inputAndExpected->getExpected());
    }
    public function testSplitFileInfoToLocalInputAndExpected() : void
    {
        $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/file_and_value.php.inc');
        $inputFileInfoAndExpected = \Symplify\EasyTesting\StaticFixtureSplitter::splitFileInfoToLocalInputAndExpected($fileInfo);
        $inputFileRealPath = $inputFileInfoAndExpected->getInputFileRealPath();
        $this->assertFileExists($inputFileRealPath);
        $this->assertSame(15025, $inputFileInfoAndExpected->getExpected());
    }
}
