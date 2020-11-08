<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Split\Tests\FileSystem\DirectoryToRepositoryProvider;

use Iterator;
use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\MonorepoBuilder\Split\FileSystem\DirectoryToRepositoryProvider;
use Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
final class DirectoryToRepositoryProviderTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var DirectoryToRepositoryProvider
     */
    private $directoryToRepositoryProvider;
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel::class);
        $this->parameterProvider = self::$container->get(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
        $this->parameterProvider->changeParameter(\Symplify\MonorepoBuilder\ValueObject\Option::DIRECTORIES_TO_REPOSITORIES_CONVERT_FORMAT, \Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat::PASCAL_CASE_TO_KEBAB_CASE);
        $this->directoryToRepositoryProvider = self::$container->get(\Symplify\MonorepoBuilder\Split\FileSystem\DirectoryToRepositoryProvider::class);
    }
    /**
     * @dataProvider provideData()
     * @param array<string, string> $parameter
     * @param array<string, string> $expectedDirectoriesToRepositories
     */
    public function test(array $parameter, array $expectedDirectoriesToRepositories, string $convertFormat) : void
    {
        $this->parameterProvider->changeParameter(\Symplify\MonorepoBuilder\ValueObject\Option::DIRECTORIES_TO_REPOSITORIES, $parameter);
        $this->parameterProvider->changeParameter(\Symplify\MonorepoBuilder\ValueObject\Option::DIRECTORIES_TO_REPOSITORIES_CONVERT_FORMAT, $convertFormat);
        $directoriesToRepositoies = $this->directoryToRepositoryProvider->provide();
        $this->assertSame($expectedDirectoriesToRepositories, $directoriesToRepositoies);
    }
    public function provideData() : \Iterator
    {
        $smartFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/FixtureConvertFormat/PascalCasePackage');
        $anotherSmartFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/FixtureConvertFormat/ThereIs1Number');
        (yield [[__DIR__ . '/FixtureConvertFormat/*' => 'some/*.git'], [$smartFileInfo->getRelativeFilePathFromCwd() => 'some/pascal-case-package.git', $anotherSmartFileInfo->getRelativeFilePathFromCwd() => 'some/there-is1-number.git'], \Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat::PASCAL_CASE_TO_KEBAB_CASE]);
        // equals
        (yield [[], [], \Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat::EQUAL]);
        $smartFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Fixture/existing-package');
        $relativeFilePathFromCwd = $smartFileInfo->getRelativeFilePathFromCwd();
        (yield [[__DIR__ . '/Fixture/existing-package' => 'some.git'], [$relativeFilePathFromCwd => 'some.git'], \Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat::EQUAL]);
        (yield [[__DIR__ . '/Fixture/existing-*' => 'some/*.git'], [$relativeFilePathFromCwd => 'some/package.git'], \Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat::EQUAL]);
    }
}
