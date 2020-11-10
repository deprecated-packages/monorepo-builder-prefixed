<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console\Command;

use _PhpScoper7371f586a1d2\Symfony\Component\Console\Command\Command;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper7371f586a1d2\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\GitHubActionsWorkflow\MissingPackageInWorkflowResolver;
use Symplify\MonorepoBuilder\Package\PackageProvider;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\SmartFileInfo;
final class CheckSplitTestWorkflowCommand extends \_PhpScoper7371f586a1d2\Symfony\Component\Console\Command\Command
{
    /**
     * @var string
     */
    private const ARGUMENT_SOURCE = 'source';
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var PackageProvider
     */
    private $packageProvider;
    /**
     * @var FileSystemGuard
     */
    private $fileSystemGuard;
    /**
     * @var MissingPackageInWorkflowResolver
     */
    private $missingPackageInWorkflowResolver;
    public function __construct(\_PhpScoper7371f586a1d2\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Package\PackageProvider $packageProvider, \Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard, \Symplify\MonorepoBuilder\GitHubActionsWorkflow\MissingPackageInWorkflowResolver $missingPackageInWorkflowResolver)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->packageProvider = $packageProvider;
        $this->fileSystemGuard = $fileSystemGuard;
        $this->missingPackageInWorkflowResolver = $missingPackageInWorkflowResolver;
    }
    protected function configure() : void
    {
        $this->addArgument(self::ARGUMENT_SOURCE, \_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'Path to Github Action workflow file with split tests');
        $this->setDescription('Checkes split workflow for all the packages with tests');
    }
    protected function execute(\_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper7371f586a1d2\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $packages = $this->packageProvider->provideWithTests();
        $workflowFileInfo = $this->resolveWorkflowFileInfo($input);
        $message = \sprintf('Checking %d packages in %s', \count($packages), $workflowFileInfo->getRelativeFilePathFromCwd());
        $this->symfonyStyle->title($message);
        $missingPackages = $this->missingPackageInWorkflowResolver->resolveInFileInfo($packages, $workflowFileInfo);
        if ($missingPackages === []) {
            $message = \sprintf('All packages found!');
            $this->symfonyStyle->success($message);
            return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
        }
        foreach ($missingPackages as $missingPackage) {
            $errorMessage = \sprintf('Package "%s" is missing', $missingPackage->getShortName());
            $this->symfonyStyle->error($errorMessage);
        }
        $this->symfonyStyle->newLine(2);
        return \Symplify\PackageBuilder\Console\ShellCode::ERROR;
    }
    private function resolveWorkflowFileInfo(\_PhpScoper7371f586a1d2\Symfony\Component\Console\Input\InputInterface $input) : \Symplify\SmartFileSystem\SmartFileInfo
    {
        $workflowFilePath = (string) $input->getArgument(self::ARGUMENT_SOURCE);
        $workflowFilePath = \getcwd() . \DIRECTORY_SEPARATOR . $workflowFilePath;
        $this->fileSystemGuard->ensureFileExists($workflowFilePath, __METHOD__);
        return new \Symplify\SmartFileSystem\SmartFileInfo($workflowFilePath);
    }
}
