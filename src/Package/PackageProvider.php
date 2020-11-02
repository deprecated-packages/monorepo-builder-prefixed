<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Package;

use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\ValueObject\Package;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class PackageProvider
{
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    /**
     * @var JsonFileManager
     */
    private $jsonFileManager;
    public function __construct(\Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager)
    {
        $this->composerJsonProvider = $composerJsonProvider;
        $this->jsonFileManager = $jsonFileManager;
    }
    /**
     * @return Package[]
     */
    public function provideWithTests() : array
    {
        return \array_filter($this->provide(), function (\Symplify\MonorepoBuilder\ValueObject\Package $package) : bool {
            return $package->hasTests();
        });
    }
    /**
     * @return Package[]
     */
    public function provide() : array
    {
        $packages = [];
        foreach ($this->composerJsonProvider->getPackagesComposerFileInfos() as $packagesComposerFileInfo) {
            $packageName = $this->detectNameFromFileInfo($packagesComposerFileInfo);
            $packages[] = new \Symplify\MonorepoBuilder\ValueObject\Package($packageName, $packagesComposerFileInfo);
        }
        \usort($packages, function (\Symplify\MonorepoBuilder\ValueObject\Package $firstPackage, \Symplify\MonorepoBuilder\ValueObject\Package $secondPackage) : int {
            return $firstPackage->getShortName() <=> $secondPackage->getShortName();
        });
        return $packages;
    }
    private function detectNameFromFileInfo(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : string
    {
        $json = $this->jsonFileManager->loadFromFileInfo($smartFileInfo);
        if (!isset($json['name'])) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return (string) $json['name'];
    }
}
