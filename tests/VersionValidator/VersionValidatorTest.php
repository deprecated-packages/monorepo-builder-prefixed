<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Tests\VersionValidator;

use _PhpScoper3bda9af7e0fd\Symfony\Component\Finder\Finder;
use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\MonorepoBuilder\VersionValidator;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\SmartFileInfo;
final class VersionValidatorTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var VersionValidator
     */
    private $versionValidator;
    /**
     * @var FinderSanitizer
     */
    private $finderSanitizer;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel::class);
        $this->versionValidator = self::$container->get(\Symplify\MonorepoBuilder\VersionValidator::class);
        $this->finderSanitizer = self::$container->get(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    }
    public function test() : void
    {
        $finder = \_PhpScoper3bda9af7e0fd\Symfony\Component\Finder\Finder::create()->name('*.json')->in(__DIR__ . '/Source');
        $fileInfos = $this->finderSanitizer->sanitize($finder);
        $conflictingPackageVersionsPerFile = $this->versionValidator->findConflictingPackageVersionsInFileInfos($fileInfos);
        $this->assertArrayHasKey('some/package', $conflictingPackageVersionsPerFile);
        $firstJson = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . \DIRECTORY_SEPARATOR . 'Source' . \DIRECTORY_SEPARATOR . 'first.json');
        $secondJson = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . \DIRECTORY_SEPARATOR . 'Source' . \DIRECTORY_SEPARATOR . 'second.json');
        $expectedConflictingVersionsPerFile = [$firstJson->getRelativeFilePathFromCwd() => '^1.0', $secondJson->getRelativeFilePathFromCwd() => '^2.0'];
        $this->assertSame($expectedConflictingVersionsPerFile, $conflictingPackageVersionsPerFile['some/package']);
    }
}
