<?php

declare (strict_types=1);
namespace Symplify\SetConfigResolver\Tests\ConfigResolver;

use Iterator;
use _PhpScoper47d898182bf9\PHPUnit\Framework\TestCase;
use _PhpScoper47d898182bf9\Symfony\Component\Console\Input\ArrayInput;
use Symplify\SetConfigResolver\Exception\SetNotFoundException;
use Symplify\SetConfigResolver\SetAwareConfigResolver;
use Symplify\SetConfigResolver\Tests\ConfigResolver\Source\DummySetProvider;
use Symplify\SmartFileSystem\Exception\FileNotFoundException;
use Symplify\SmartFileSystem\SmartFileInfo;
final class SetAwareConfigResolverTest extends \_PhpScoper47d898182bf9\PHPUnit\Framework\TestCase
{
    /**
     * @var SetAwareConfigResolver
     */
    private $setAwareConfigResolver;
    protected function setUp() : void
    {
        $this->setAwareConfigResolver = new \Symplify\SetConfigResolver\SetAwareConfigResolver(new \Symplify\SetConfigResolver\Tests\ConfigResolver\Source\DummySetProvider());
    }
    /**
     * @dataProvider provideOptionsAndExpectedConfig()
     * @param mixed[] $options
     */
    public function testDetectFromInputAndProvideWithAbsolutePath(array $options, ?string $expectedConfig) : void
    {
        $resolvedConfigFileInfo = $this->setAwareConfigResolver->resolveFromInput(new \_PhpScoper47d898182bf9\Symfony\Component\Console\Input\ArrayInput($options));
        if ($expectedConfig === null) {
            $this->assertNull($resolvedConfigFileInfo);
        } else {
            $this->assertSame($expectedConfig, $resolvedConfigFileInfo->getRealPath());
        }
    }
    public function provideOptionsAndExpectedConfig() : \Iterator
    {
        (yield [['--config' => 'README.md'], \getcwd() . '/README.md']);
        (yield [['-c' => 'README.md'], \getcwd() . '/README.md']);
        (yield [['--config' => \getcwd() . '/README.md'], \getcwd() . '/README.md']);
        (yield [['-c' => \getcwd() . '/README.md'], \getcwd() . '/README.md']);
        (yield [['--', 'sh', '-c' => '/bin/true'], null]);
    }
    public function testSetsNotFound() : void
    {
        $basicConfigFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Fixture/missing_set_config.php');
        $this->expectException(\Symplify\SetConfigResolver\Exception\SetNotFoundException::class);
        $this->setAwareConfigResolver->resolveFromParameterSetsFromConfigFiles([$basicConfigFileInfo]);
    }
    public function testPhpSetsFileInfos() : void
    {
        $basicConfigFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Fixture/php_config_with_sets.php');
        $setFileInfos = $this->setAwareConfigResolver->resolveFromParameterSetsFromConfigFiles([$basicConfigFileInfo]);
        $this->assertCount(1, $setFileInfos);
        $setFileInfo = $setFileInfos[0];
        $expectedSetFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/some_php_set.php');
        $this->assertEquals($expectedSetFileInfo, $setFileInfo);
    }
    public function testMissingFileInInput() : void
    {
        $this->expectException(\Symplify\SmartFileSystem\Exception\FileNotFoundException::class);
        $arrayInput = new \_PhpScoper47d898182bf9\Symfony\Component\Console\Input\ArrayInput(['--config' => 'someFile.yml']);
        $this->setAwareConfigResolver->resolveFromInput($arrayInput);
    }
}
