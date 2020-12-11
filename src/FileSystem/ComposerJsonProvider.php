<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\FileSystem;

use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Finder\PackageComposerFinder;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class ComposerJsonProvider
{
    /**
     * @var JsonFileManager
     */
    private $jsonFileManager;
    /**
     * @var PackageComposerFinder
     */
    private $packageComposerFinder;
    /**
     * @var ComposerJsonFactory
     */
    private $composerJsonFactory;
    public function __construct(\Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager, \Symplify\MonorepoBuilder\Finder\PackageComposerFinder $packageComposerFinder, \Symplify\ComposerJsonManipulator\ComposerJsonFactory $composerJsonFactory)
    {
        $this->jsonFileManager = $jsonFileManager;
        $this->packageComposerFinder = $packageComposerFinder;
        $this->composerJsonFactory = $composerJsonFactory;
    }
    public function getRootFileInfo() : \Symplify\SmartFileSystem\SmartFileInfo
    {
        return $this->packageComposerFinder->getRootPackageComposerFile();
    }
    /**
     * @return SmartFileInfo[]
     */
    public function getPackagesComposerFileInfos() : array
    {
        return $this->packageComposerFinder->getPackageComposerFiles();
    }
    /**
     * @return SmartFileInfo[]
     */
    public function getRootAndPackageFileInfos() : array
    {
        return \array_merge($this->getPackagesComposerFileInfos(), [$this->packageComposerFinder->getRootPackageComposerFile()]);
    }
    public function getPackageFileInfoByName(string $packageName) : \Symplify\SmartFileSystem\SmartFileInfo
    {
        $packageComposerFiles = $this->packageComposerFinder->getPackageComposerFiles();
        foreach ($packageComposerFiles as $packageComposerFile) {
            $json = $this->jsonFileManager->loadFromFileInfo($packageComposerFile);
            if (!isset($json['name'])) {
                continue;
            }
            if ($json['name'] !== $packageName) {
                continue;
            }
            return $packageComposerFile;
        }
        throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
    }
    public function getRootComposerJson() : \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson
    {
        return $this->composerJsonFactory->createFromFileInfo($this->getRootFileInfo());
    }
}
