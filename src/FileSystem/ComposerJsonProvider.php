<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\FileSystem;

use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
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
    public function __construct(\Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager, \Symplify\MonorepoBuilder\Finder\PackageComposerFinder $packageComposerFinder)
    {
        $this->jsonFileManager = $jsonFileManager;
        $this->packageComposerFinder = $packageComposerFinder;
    }
    public function getRootFileInfo() : \Symplify\SmartFileSystem\SmartFileInfo
    {
        return $this->packageComposerFinder->getRootPackageComposerFile();
    }
    /**
     * @return mixed[]
     */
    public function getRootJson() : array
    {
        return $this->jsonFileManager->loadFromFilePath(\getcwd() . '/composer.json');
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
}
