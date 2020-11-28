<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Testing;

use _PhpScoper1ff8e175c295\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\ConsoleColorDiff\Console\Output\ConsoleDiffer;
use Symplify\MonorepoBuilder\Testing\ComposerJson\ComposerVersionManipulator;
use Symplify\MonorepoBuilder\Testing\PackageDependency\UsedPackagesResolver;
use Symplify\SmartFileSystem\SmartFileInfo;
final class ComposerJsonRequireUpdater
{
    /**
     * @var JsonFileManager
     */
    private $jsonFileManager;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var ComposerVersionManipulator
     */
    private $composerVersionManipulator;
    /**
     * @var UsedPackagesResolver
     */
    private $usedPackagesResolver;
    /**
     * @var ConsoleDiffer
     */
    private $consoleDiffer;
    public function __construct(\Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager, \_PhpScoper1ff8e175c295\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Testing\ComposerJson\ComposerVersionManipulator $composerVersionManipulator, \Symplify\MonorepoBuilder\Testing\PackageDependency\UsedPackagesResolver $usedPackagesResolver, \Symplify\ConsoleColorDiff\Console\Output\ConsoleDiffer $consoleDiffer)
    {
        $this->jsonFileManager = $jsonFileManager;
        $this->symfonyStyle = $symfonyStyle;
        $this->composerVersionManipulator = $composerVersionManipulator;
        $this->usedPackagesResolver = $usedPackagesResolver;
        $this->consoleDiffer = $consoleDiffer;
    }
    public function processPackage(\Symplify\SmartFileSystem\SmartFileInfo $packageFileInfo) : void
    {
        $packageComposerJson = $this->jsonFileManager->loadFromFileInfo($packageFileInfo);
        $usedPackageNames = $this->usedPackagesResolver->resolveForPackage($packageComposerJson);
        if ($usedPackageNames === []) {
            $message = \sprintf('Package "%s" does not use any mutual dependencies, so we skip it', $packageFileInfo->getRelativeFilePathFromCwd());
            $this->symfonyStyle->note($message);
            return;
        }
        $packageComposerJson = $this->composerVersionManipulator->setAsteriskVersionForUsedPackages($packageComposerJson, $usedPackageNames);
        $oldComposerJsonContents = $packageFileInfo->getContents();
        $newComposerJsonContents = $this->jsonFileManager->printJsonToFileInfo($packageComposerJson, $packageFileInfo);
        $message = \sprintf('File "%s" was updated', $packageFileInfo->getRelativeFilePathFromCwd());
        $this->symfonyStyle->title($message);
        $this->consoleDiffer->diffAndPrint($oldComposerJsonContents, $newComposerJsonContents);
        $this->symfonyStyle->newLine(2);
    }
}
