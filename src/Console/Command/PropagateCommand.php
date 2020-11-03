<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console\Command;

use _PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Command\Command;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\DependencyUpdater;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\VersionValidator;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\SmartFileInfo;
final class PropagateCommand extends \_PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Command\Command
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
     * @var DependencyUpdater
     */
    private $dependencyUpdater;
    public function __construct(\_PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\VersionValidator $versionValidator, \Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\MonorepoBuilder\DependencyUpdater $dependencyUpdater)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->versionValidator = $versionValidator;
        $this->composerJsonProvider = $composerJsonProvider;
        $this->dependencyUpdater = $dependencyUpdater;
    }
    protected function configure() : void
    {
        $this->setName(\Symplify\PackageBuilder\Console\Command\CommandNaming::classToName(self::class));
        $this->setDescription('Propagate versions from root "composer.json" to all packages, the opposite of "merge" command');
    }
    protected function execute(\_PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Output\OutputInterface $output) : int
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
            $filesToVersion = $this->processManualConfigFiles($filesToVersion, $packageName, $newVersion);
            $fileToVersionKeys = \array_keys($filesToVersion);
            foreach ($fileToVersionKeys as $filePath) {
                $this->dependencyUpdater->updateFileInfosWithPackagesAndVersion([new \Symplify\SmartFileSystem\SmartFileInfo($filePath)], [$packageName], $newVersion);
            }
        }
        $this->symfonyStyle->success('Root "composer.json" versions are now propagated to all package "composer.json" files.');
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    /**
     * @param array<string, string> $filesToVersion
     * @return array<string, string>
     */
    private function processManualConfigFiles(array $filesToVersion, string $packageName, string $newVersion) : array
    {
        if (!isset($filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::CONFIG])) {
            return $filesToVersion;
        }
        $message = \sprintf('Update "%s" to "%s" version in "%s" file manually', $packageName, $newVersion, \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
        $this->symfonyStyle->warning($message);
        unset($filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::CONFIG]);
        return $filesToVersion;
    }
}
