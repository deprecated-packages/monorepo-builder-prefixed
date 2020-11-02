<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console\Command;

use _PhpScoperabb8c88e9df1\Symfony\Component\Console\Command\Command;
use _PhpScoperabb8c88e9df1\Symfony\Component\Console\Input\InputArgument;
use _PhpScoperabb8c88e9df1\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperabb8c88e9df1\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperabb8c88e9df1\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\DependencyUpdater;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
final class BumpInterdependencyCommand extends \_PhpScoperabb8c88e9df1\Symfony\Component\Console\Command\Command
{
    /**
     * @var string
     */
    private const VERSION_ARGUMENT = 'version';
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var DependencyUpdater
     */
    private $dependencyUpdater;
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    public function __construct(\_PhpScoperabb8c88e9df1\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\DependencyUpdater $dependencyUpdater, \Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->dependencyUpdater = $dependencyUpdater;
        $this->composerJsonProvider = $composerJsonProvider;
    }
    protected function configure() : void
    {
        $this->setName(\Symplify\PackageBuilder\Console\Command\CommandNaming::classToName(self::class));
        $this->setDescription('Bump dependency of split packages on each other');
        $this->addArgument(self::VERSION_ARGUMENT, \_PhpScoperabb8c88e9df1\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'New version of inter-dependencies, e.g. "^4.4.2"');
    }
    protected function execute(\_PhpScoperabb8c88e9df1\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperabb8c88e9df1\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        /** @var string $version */
        $version = $input->getArgument(self::VERSION_ARGUMENT);
        $mainComposerJson = $this->composerJsonProvider->getRootJson();
        // @todo resolve better for only found packages
        // see https://github.com/symplify/symplify/pull/1037/files
        [$vendor] = \explode('/', $mainComposerJson['name']);
        $this->dependencyUpdater->updateFileInfosWithVendorAndVersion($this->composerJsonProvider->getPackagesComposerFileInfos(), $vendor, $version);
        $successMessage = \sprintf('Inter-dependencies of packages were updated to "%s".', $version);
        $this->symfonyStyle->success($successMessage);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
