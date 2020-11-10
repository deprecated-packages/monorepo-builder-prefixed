<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Split\Command;

use _PhpScoper7371f586a1d2\Symfony\Component\Console\Command\Command;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputOption;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\Split\Configuration\RepositoryGuard;
use Symplify\MonorepoBuilder\Split\FileSystem\DirectoryToRepositoryProvider;
use Symplify\MonorepoBuilder\Split\PackageToRepositorySplitter;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
final class SplitCommand extends \_PhpScoper7371f586a1d2\Symfony\Component\Console\Command\Command
{
    /**
     * @var string
     */
    private $rootDirectory;
    /**
     * @var RepositoryGuard
     */
    private $repositoryGuard;
    /**
     * @var PackageToRepositorySplitter
     */
    private $packageToRepositorySplitter;
    /**
     * @var DirectoryToRepositoryProvider
     */
    private $directoryToRepositoryProvider;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct(\Symplify\MonorepoBuilder\Split\Configuration\RepositoryGuard $repositoryGuard, \Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider, \Symplify\MonorepoBuilder\Split\PackageToRepositorySplitter $packageToRepositorySplitter, \Symplify\MonorepoBuilder\Split\FileSystem\DirectoryToRepositoryProvider $directoryToRepositoryProvider, \_PhpScoper7371f586a1d2\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        parent::__construct();
        $this->repositoryGuard = $repositoryGuard;
        $this->packageToRepositorySplitter = $packageToRepositorySplitter;
        $this->directoryToRepositoryProvider = $directoryToRepositoryProvider;
        $this->symfonyStyle = $symfonyStyle;
        $this->rootDirectory = $parameterProvider->provideStringParameter(\Symplify\MonorepoBuilder\ValueObject\Option::ROOT_DIRECTORY);
    }
    protected function configure() : void
    {
        $description = \sprintf('Splits monorepo packages to standalone repositories as defined in "%s" section of "%s" config.', '$parameters->set(Option::DIRECTORIES_REPOSITORY, [...])', \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
        $this->setDescription($description);
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::BRANCH, null, \_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL, 'Branch to run split on, defaults to current branch');
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::MAX_PROCESSES, null, \_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Maximum number of processes to run in parallel');
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::TAG, 't', \_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Specify the Git tag use for split. Use the most recent one by default');
    }
    protected function execute(\_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper7371f586a1d2\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->symfonyStyle->warning('This command is deprecated and will be removed in the future. No worries, switch to GitHub Action, that can do the work much faster and more reliable, then this poor wrapper around bash that wraps a git hacking.');
        // to get the attention
        \sleep(3);
        $this->repositoryGuard->ensureIsRepositoryDirectory($this->rootDirectory);
        $maxProcesses = $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::MAX_PROCESSES) ? (int) $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::MAX_PROCESSES) : null;
        /** @var string|null $tag */
        $tag = $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::TAG);
        $branch = $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::BRANCH) ? (string) $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::BRANCH) : null;
        $resolvedDirectoriesToRepository = $this->directoryToRepositoryProvider->provide();
        if (\count($resolvedDirectoriesToRepository) === 0) {
            $this->symfonyStyle->error('No packages to split');
            return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
        }
        $this->symfonyStyle->title('Splitting Following Packages');
        foreach ($resolvedDirectoriesToRepository as $directory => $gitRepository) {
            $message = \sprintf('* "%s" directory to "%s" repository', $directory, $gitRepository);
            $this->symfonyStyle->writeln($message);
        }
        $this->symfonyStyle->newLine(2);
        // to give time to process split information
        \sleep(2);
        $this->packageToRepositorySplitter->splitDirectoriesToRepositories($resolvedDirectoriesToRepository, $this->rootDirectory, $branch, $maxProcesses, $tag);
        $message = \sprintf('Split of %d packages was successful', \count($resolvedDirectoriesToRepository));
        $this->symfonyStyle->success($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
