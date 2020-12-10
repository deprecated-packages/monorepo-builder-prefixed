<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Testing;

use _PhpScoperfccd2ca01403\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\ConsoleColorDiff\Console\Output\ConsoleDiffer;
use Symplify\MonorepoBuilder\Package\PackageNamesProvider;
use Symplify\MonorepoBuilder\Testing\ComposerJson\ComposerJsonSymlinker;
use Symplify\MonorepoBuilder\Testing\PackageDependency\UsedPackagesResolver;
use Symplify\SmartFileSystem\SmartFileInfo;
final class ComposerJsonRepositoriesUpdater
{
    /**
     * @var PackageNamesProvider
     */
    private $packageNamesProvider;
    /**
     * @var JsonFileManager
     */
    private $jsonFileManager;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var ComposerJsonSymlinker
     */
    private $composerJsonSymlinker;
    /**
     * @var UsedPackagesResolver
     */
    private $usedPackagesResolver;
    /**
     * @var ConsoleDiffer
     */
    private $consoleDiffer;
    public function __construct(\Symplify\MonorepoBuilder\Package\PackageNamesProvider $packageNamesProvider, \Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager, \_PhpScoperfccd2ca01403\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Testing\ComposerJson\ComposerJsonSymlinker $composerJsonSymlinker, \Symplify\MonorepoBuilder\Testing\PackageDependency\UsedPackagesResolver $usedPackagesResolver, \Symplify\ConsoleColorDiff\Console\Output\ConsoleDiffer $consoleDiffer)
    {
        $this->packageNamesProvider = $packageNamesProvider;
        $this->jsonFileManager = $jsonFileManager;
        $this->symfonyStyle = $symfonyStyle;
        $this->composerJsonSymlinker = $composerJsonSymlinker;
        $this->usedPackagesResolver = $usedPackagesResolver;
        $this->consoleDiffer = $consoleDiffer;
    }
    public function processPackage(\Symplify\SmartFileSystem\SmartFileInfo $packageFileInfo, \Symplify\SmartFileSystem\SmartFileInfo $mainComposerJsonFileInfo) : void
    {
        $packageComposerJson = $this->jsonFileManager->loadFromFileInfo($packageFileInfo);
        $usedPackageNames = $this->usedPackagesResolver->resolveForPackage($packageComposerJson);
        if ($usedPackageNames === []) {
            $message = \sprintf('Package "%s" does not use any mutual dependencies, so we skip it', $packageFileInfo->getRelativeFilePathFromCwd());
            $this->symfonyStyle->note($message);
            return;
        }
        // possibly replace them all to cover recursive secondary dependencies
        $packageNames = $this->packageNamesProvider->provide();
        $oldComposerJsonContents = $packageFileInfo->getContents();
        $packageComposerJson = $this->composerJsonSymlinker->decoratePackageComposerJsonWithPackageSymlinks($packageComposerJson, $packageNames, $mainComposerJsonFileInfo);
        $newComposerJsonContents = $this->jsonFileManager->printJsonToFileInfo($packageComposerJson, $packageFileInfo);
        $message = \sprintf('File "%s" was updated', $packageFileInfo->getRelativeFilePathFromCwd());
        $this->symfonyStyle->title($message);
        $this->consoleDiffer->diffAndPrint($oldComposerJsonContents, $newComposerJsonContents);
        $this->symfonyStyle->newLine(2);
    }
}
