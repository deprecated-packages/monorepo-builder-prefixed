<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Testing\Command;

use _PhpScoper31b05558ad5c\Symfony\Component\Console\Command\Command;
use _PhpScoper31b05558ad5c\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper31b05558ad5c\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper31b05558ad5c\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper31b05558ad5c\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\Testing\ComposerJsonRepositoriesUpdater;
use Symplify\MonorepoBuilder\Testing\ComposerJsonRequireUpdater;
use Symplify\MonorepoBuilder\Testing\ValueObject\Option;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\SmartFileInfo;
final class LocalizeComposerPathsCommand extends \_PhpScoper31b05558ad5c\Symfony\Component\Console\Command\Command
{
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var ComposerJsonRequireUpdater
     */
    private $composerJsonRequireUpdater;
    /**
     * @var FileSystemGuard
     */
    private $fileSystemGuard;
    /**
     * @var ComposerJsonRepositoriesUpdater
     */
    private $composerJsonRepositoriesUpdater;
    public function __construct(\Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \_PhpScoper31b05558ad5c\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Testing\ComposerJsonRequireUpdater $composerJsonRequireUpdater, \Symplify\MonorepoBuilder\Testing\ComposerJsonRepositoriesUpdater $composerJsonRepositoriesUpdater, \Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard)
    {
        $this->composerJsonProvider = $composerJsonProvider;
        $this->symfonyStyle = $symfonyStyle;
        $this->composerJsonRequireUpdater = $composerJsonRequireUpdater;
        $this->fileSystemGuard = $fileSystemGuard;
        parent::__construct();
        $this->composerJsonRepositoriesUpdater = $composerJsonRepositoriesUpdater;
    }
    protected function configure() : void
    {
        $this->setDescription('Set mutual package paths to local packages - use for pre-split package testing');
        $this->addArgument(\Symplify\MonorepoBuilder\Testing\ValueObject\Option::PACKAGE_COMPOSER_JSON, \_PhpScoper31b05558ad5c\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'Path to package "composer.json"');
    }
    protected function execute(\_PhpScoper31b05558ad5c\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper31b05558ad5c\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $packageComposerJson = (string) $input->getArgument(\Symplify\MonorepoBuilder\Testing\ValueObject\Option::PACKAGE_COMPOSER_JSON);
        $this->fileSystemGuard->ensureFileExists($packageComposerJson, __METHOD__);
        $packageComposerJsonFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($packageComposerJson);
        $rootFileInfo = $this->composerJsonProvider->getRootFileInfo();
        // 1. update "require" to "*" for all local packages
        $packagesFileInfos = $this->composerJsonProvider->getPackagesComposerFileInfos();
        foreach ($packagesFileInfos as $packageFileInfo) {
            $this->composerJsonRequireUpdater->processPackage($packageFileInfo);
        }
        // 2. update "repository" to "*" for current composer.json
        $this->composerJsonRepositoriesUpdater->processPackage($packageComposerJsonFileInfo, $rootFileInfo);
        $message = \sprintf('Package paths in "%s" have been updated', $packageComposerJsonFileInfo->getRelativeFilePathFromCwd());
        $this->symfonyStyle->success($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
