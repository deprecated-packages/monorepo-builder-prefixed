<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Command;

use _PhpScoper56e9de378e59\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper56e9de378e59\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\DependencyUpdater;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\VersionPropagator;
use Symplify\MonorepoBuilder\VersionValidator;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\SmartFileInfo;
final class PropagateCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var VersionValidator
     */
    private $versionValidator;
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    /**
     * @var DependencyUpdater
     */
    private $dependencyUpdater;
    /**
     * @var VersionPropagator
     */
    private $versionPropagator;
    public function __construct(\Symplify\MonorepoBuilder\VersionValidator $versionValidator, \Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\MonorepoBuilder\DependencyUpdater $dependencyUpdater, \Symplify\MonorepoBuilder\VersionPropagator $versionPropagator)
    {
        parent::__construct();
        $this->versionValidator = $versionValidator;
        $this->composerJsonProvider = $composerJsonProvider;
        $this->dependencyUpdater = $dependencyUpdater;
        $this->versionPropagator = $versionPropagator;
    }
    protected function configure() : void
    {
        $this->setDescription('Propagate versions from root "composer.json" to all packages, the opposite of "merge" command');
    }
    protected function execute(\_PhpScoper56e9de378e59\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper56e9de378e59\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $conflictingPackageVersions = $this->versionValidator->findConflictingPackageVersionsInFileInfos($this->composerJsonProvider->getRootAndPackageFileInfos());
        foreach ($conflictingPackageVersions as $packageName => $filesToVersion) {
            if (!isset($filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::COMPOSER_JSON])) {
                // nothing to propagate
                continue;
            }
            // update all other files to root composer.json version
            $newVersion = $filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::COMPOSER_JSON];
            unset($filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::COMPOSER_JSON]);
            $filesToVersion = $this->versionPropagator->processManualConfigFiles($filesToVersion, $packageName, $newVersion);
            $fileToVersionKeys = \array_keys($filesToVersion);
            foreach ($fileToVersionKeys as $filePath) {
                $this->dependencyUpdater->updateFileInfosWithPackagesAndVersion([new \Symplify\SmartFileSystem\SmartFileInfo($filePath)], [$packageName], $newVersion);
            }
        }
        $this->symfonyStyle->success('Root "composer.json" versions are now propagated to all package "composer.json" files.');
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
