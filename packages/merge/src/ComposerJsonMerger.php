<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge;

use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Configuration\MergedPackagesCollector;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface;
use Symplify\MonorepoBuilder\Merge\PathResolver\AutoloadPathNormalizer;
use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * @see \Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonMerger\ComposerJsonMergerTest
 */
final class ComposerJsonMerger
{
    /**
     * @var ComposerKeyMergerInterface[]
     */
    private $composerKeyMergers = [];
    /**
     * @var MergedPackagesCollector
     */
    private $mergedPackagesCollector;
    /**
     * @var AutoloadPathNormalizer
     */
    private $autoloadPathNormalizer;
    /**
     * @var ComposerJsonFactory
     */
    private $composerJsonFactory;
    /**
     * @param ComposerKeyMergerInterface[] $composerKeyMergers
     */
    public function __construct(\Symplify\ComposerJsonManipulator\ComposerJsonFactory $composerJsonFactory, \Symplify\MonorepoBuilder\Merge\Configuration\MergedPackagesCollector $mergedPackagesCollector, \Symplify\MonorepoBuilder\Merge\PathResolver\AutoloadPathNormalizer $autoloadPathNormalizer, array $composerKeyMergers)
    {
        $this->mergedPackagesCollector = $mergedPackagesCollector;
        $this->autoloadPathNormalizer = $autoloadPathNormalizer;
        $this->composerJsonFactory = $composerJsonFactory;
        $this->composerKeyMergers = $composerKeyMergers;
    }
    /**
     * @param SmartFileInfo[] $composerPackageFileInfos
     */
    public function mergeFileInfos(array $composerPackageFileInfos) : \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson
    {
        $mainComposerJson = $this->composerJsonFactory->createFromArray([]);
        foreach ($composerPackageFileInfos as $packageFileInfo) {
            $packageComposerJson = $this->composerJsonFactory->createFromFileInfo($packageFileInfo);
            $this->mergeJsonToRootWithPackageFileInfo($mainComposerJson, $packageComposerJson, $packageFileInfo);
        }
        return $mainComposerJson;
    }
    public function mergeJsonToRootWithPackageFileInfo(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson, \Symplify\SmartFileSystem\SmartFileInfo $packageFileInfo) : void
    {
        // prepare paths before autolaod merging
        $this->autoloadPathNormalizer->normalizeAutoloadPaths($newComposerJson, $packageFileInfo);
        $this->mergeJsonToRoot($mainComposerJson, $newComposerJson);
    }
    public function mergeJsonToRoot(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson) : void
    {
        $name = $newComposerJson->getName();
        if ($name !== null) {
            $this->mergedPackagesCollector->addPackage($name);
        }
        foreach ($this->composerKeyMergers as $composerKeyMerger) {
            $composerKeyMerger->merge($mainComposerJson, $newComposerJson);
        }
    }
}
