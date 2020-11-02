<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console\Command;

use _PhpScoperab37dd4d9c3e\Nette\Utils\Strings;
use _PhpScoperab37dd4d9c3e\Symfony\Component\Console\Command\Command;
use _PhpScoperab37dd4d9c3e\Symfony\Component\Console\Input\InputArgument;
use _PhpScoperab37dd4d9c3e\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperab37dd4d9c3e\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperab37dd4d9c3e\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\Package\PackageProvider;
use Symplify\MonorepoBuilder\ValueObject\Package;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\SmartFileInfo;
final class CheckSplitTestWorkflowCommand extends \_PhpScoperab37dd4d9c3e\Symfony\Component\Console\Command\Command
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
    public function __construct(\_PhpScoperab37dd4d9c3e\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Package\PackageProvider $packageProvider, \Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->packageProvider = $packageProvider;
        $this->fileSystemGuard = $fileSystemGuard;
    }
    protected function configure() : void
    {
        $this->setName(\Symplify\PackageBuilder\Console\Command\CommandNaming::classToName(self::class));
        $this->addArgument(self::ARGUMENT_SOURCE, \_PhpScoperab37dd4d9c3e\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'Path to Github Action workflow file with monorepo tests');
        $this->setDescription('Checkes monorepo workflow for all the packages with tests');
    }
    protected function execute(\_PhpScoperab37dd4d9c3e\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperab37dd4d9c3e\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $packages = $this->packageProvider->provideWithTests();
        $message = \sprintf('Checking %d packages with tests', \count($packages));
        $this->symfonyStyle->title($message);
        $workflowFileInfo = $this->resolveWorkflowFileInfo($input);
        $missingPackages = $this->resolveMissingPackagesInSplitTests($packages, $workflowFileInfo);
        if ($missingPackages === []) {
            $message = \sprintf('All packages found!');
            $this->symfonyStyle->success($message);
            return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
        }
        $errorMessage = \sprintf('Add missing packages to "%s" workflow file', $workflowFileInfo->getRelativeFilePathFromCwd());
        $this->symfonyStyle->error($errorMessage);
        foreach ($missingPackages as $missingPackage) {
            $this->symfonyStyle->writeln(' - ' . $missingPackage->getShortName());
        }
        $this->symfonyStyle->newLine(2);
        return \Symplify\PackageBuilder\Console\ShellCode::ERROR;
    }
    private function resolveWorkflowFileInfo(\_PhpScoperab37dd4d9c3e\Symfony\Component\Console\Input\InputInterface $input) : \Symplify\SmartFileSystem\SmartFileInfo
    {
        $workflowFilePath = (string) $input->getArgument(self::ARGUMENT_SOURCE);
        $workflowFilePath = \getcwd() . \DIRECTORY_SEPARATOR . $workflowFilePath;
        $this->fileSystemGuard->ensureFileExists($workflowFilePath, __METHOD__);
        return new \Symplify\SmartFileSystem\SmartFileInfo($workflowFilePath);
    }
    /**
     * @param Package[] $packages
     * @return Package[]
     */
    private function resolveMissingPackagesInSplitTests(array $packages, \Symplify\SmartFileSystem\SmartFileInfo $workflowFileInfo) : array
    {
        $missingPackages = [];
        foreach ($packages as $package) {
            $packageNameItemPattern = '#\\-\\s+' . \preg_quote($package->getShortDirectory(), '#') . '\\b#';
            if (\_PhpScoperab37dd4d9c3e\Nette\Utils\Strings::match($workflowFileInfo->getContents(), $packageNameItemPattern)) {
                $message = \sprintf('Package "%s" was found in "%s"', $package->getShortDirectory(), $workflowFileInfo->getRelativeFilePathFromCwd());
                $this->symfonyStyle->note($message);
                continue;
            }
            $missingPackages[] = $package;
        }
        return $missingPackages;
    }
}
