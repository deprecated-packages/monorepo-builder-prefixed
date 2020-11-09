<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Command;

use _PhpScopere9939b84e968\Symfony\Component\Console\Command\Command;
use _PhpScopere9939b84e968\Symfony\Component\Console\Input\InputInterface;
use _PhpScopere9939b84e968\Symfony\Component\Console\Output\OutputInterface;
use _PhpScopere9939b84e968\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\MonorepoBuilder\Console\Reporter\ConflictingPackageVersionsReporter;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\Merge\Application\MergedAndDecoratedComposerJsonFactory;
use Symplify\MonorepoBuilder\VersionValidator;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class MergeCommand extends \_PhpScopere9939b84e968\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var VersionValidator
     */
    private $versionValidator;
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    /**
     * @var ConflictingPackageVersionsReporter
     */
    private $conflictingPackageVersionsReporter;
    /**
     * @var ComposerJsonFactory
     */
    private $composerJsonFactory;
    /**
     * @var JsonFileManager
     */
    private $jsonFileManager;
    /**
     * @var MergedAndDecoratedComposerJsonFactory
     */
    private $mergedAndDecoratedComposerJsonFactory;
    public function __construct(\_PhpScopere9939b84e968\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\VersionValidator $versionValidator, \Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\MonorepoBuilder\Console\Reporter\ConflictingPackageVersionsReporter $conflictingPackageVersionsReporter, \Symplify\ComposerJsonManipulator\ComposerJsonFactory $composerJsonFactory, \Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager, \Symplify\MonorepoBuilder\Merge\Application\MergedAndDecoratedComposerJsonFactory $mergedAndDecoratedComposerJsonFactory)
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->versionValidator = $versionValidator;
        $this->composerJsonProvider = $composerJsonProvider;
        $this->conflictingPackageVersionsReporter = $conflictingPackageVersionsReporter;
        $this->composerJsonFactory = $composerJsonFactory;
        $this->jsonFileManager = $jsonFileManager;
        $this->mergedAndDecoratedComposerJsonFactory = $mergedAndDecoratedComposerJsonFactory;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->setDescription('Merge "composer.json" from all found packages to root one');
    }
    protected function execute(\_PhpScopere9939b84e968\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopere9939b84e968\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->ensureNoConflictingPackageVersions();
        $mainComposerJsonFilePath = \getcwd() . '/composer.json';
        $mainComposerJson = $this->composerJsonFactory->createFromFilePath($mainComposerJsonFilePath);
        $packageFileInfos = $this->composerJsonProvider->getPackagesComposerFileInfos();
        $this->mergedAndDecoratedComposerJsonFactory->createFromRootConfigAndPackageFileInfos($mainComposerJson, $packageFileInfos);
        $this->jsonFileManager->printComposerJsonToFilePath($mainComposerJson, $mainComposerJsonFilePath);
        $this->symfonyStyle->success('Main "composer.json" was updated.');
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    private function ensureNoConflictingPackageVersions() : void
    {
        $conflictingPackageVersions = $this->versionValidator->findConflictingPackageVersionsInFileInfos($this->composerJsonProvider->getPackagesComposerFileInfos());
        if (\count($conflictingPackageVersions) === 0) {
            return;
        }
        $this->conflictingPackageVersionsReporter->report($conflictingPackageVersions);
        throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException('Fix conflicting package version first');
    }
}
