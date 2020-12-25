<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Tests\Package;

use _PhpScoper8b183f8218dc\Symfony\Component\Finder\Finder;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\ComposerJsonMerger;
use Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\AbstractComposerJsonDecoratorTest;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\SmartFileInfo;
abstract class AbstractMergeTestCase extends \Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\AbstractComposerJsonDecoratorTest
{
    /**
     * @var ComposerJsonMerger
     */
    private $composerJsonMerger;
    /**
     * @var FinderSanitizer
     */
    private $finderSanitizer;
    protected function setUp() : void
    {
        parent::setUp();
        $this->composerJsonMerger = $this->getService(\Symplify\MonorepoBuilder\Merge\ComposerJsonMerger::class);
        $this->finderSanitizer = $this->getService(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    }
    protected function doTestDirectoryMergeToFile(string $directoryWithJsonFiles, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $expectedComposerJson) : void
    {
        $fileInfos = $this->getFileInfosFromDirectory($directoryWithJsonFiles);
        $mergedComposerJson = $this->composerJsonMerger->mergeFileInfos($fileInfos);
        $this->assertComposerJsonEquals($expectedComposerJson, $mergedComposerJson);
    }
    /**
     * @return SmartFileInfo[]
     */
    private function getFileInfosFromDirectory(string $directory) : array
    {
        $finder = \_PhpScoper8b183f8218dc\Symfony\Component\Finder\Finder::create()->files()->in($directory)->name('*.json')->sortByName();
        return $this->finderSanitizer->sanitize($finder);
    }
}
