<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Command;

use _PhpScoper3a1deaf87850\PharIo\Version\Version;
use _PhpScoper3a1deaf87850\Symfony\Component\Console\Command\Command;
use _PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputOption;
use _PhpScoper3a1deaf87850\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper3a1deaf87850\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\StageAwareInterface;
use Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard;
use Symplify\MonorepoBuilder\Release\ReleaseWorkerProvider;
use Symplify\MonorepoBuilder\Release\ValueObject\SemVersion;
use Symplify\MonorepoBuilder\Release\Version\VersionFactory;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\PackageBuilder\Console\ShellCode;
final class ReleaseCommand extends \_PhpScoper3a1deaf87850\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var ReleaseGuard
     */
    private $releaseGuard;
    /**
     * @var ReleaseWorkerProvider
     */
    private $releaseWorkerProvider;
    /**
     * @var VersionFactory
     */
    private $versionFactory;
    public function __construct(\_PhpScoper3a1deaf87850\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Release\ReleaseWorkerProvider $releaseWorkerProvider, \Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard $releaseGuard, \Symplify\MonorepoBuilder\Release\Version\VersionFactory $versionFactory)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->releaseGuard = $releaseGuard;
        $this->releaseWorkerProvider = $releaseWorkerProvider;
        $this->versionFactory = $versionFactory;
    }
    protected function configure() : void
    {
        $this->setDescription('Perform release process with set Release Workers.');
        $description = \sprintf('Release version, in format "<major>.<minor>.<patch>" or "v<major>.<minor>.<patch> or one of keywords: "%s"', \implode('", "', \Symplify\MonorepoBuilder\Release\ValueObject\SemVersion::ALL));
        $this->addArgument(\Symplify\MonorepoBuilder\ValueObject\Option::VERSION, \_PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputArgument::REQUIRED, $description);
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::DRY_RUN, null, \_PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Do not perform operations, just their preview');
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::STAGE, null, \_PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Name of stage to perform');
    }
    protected function execute(\_PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper3a1deaf87850\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        // validation phase
        $stage = $this->resolveStage($input);
        $activeReleaseWorkers = $this->getReleaseWorkers($stage);
        if ($activeReleaseWorkers === []) {
            $errorMessage = \sprintf('There are no release workers registered. Be sure to add them to "%s"', \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
            $this->symfonyStyle->error($errorMessage);
            return \Symplify\PackageBuilder\Console\ShellCode::ERROR;
        }
        $totalWorkerCount = \count($activeReleaseWorkers);
        $i = 0;
        $isDryRun = (bool) $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::DRY_RUN);
        $version = $this->resolveVersion($input, $stage);
        foreach ($activeReleaseWorkers as $releaseWorker) {
            $title = \sprintf('%d/%d) %s', ++$i, $totalWorkerCount, $releaseWorker->getDescription($version));
            $this->symfonyStyle->title($title);
            $this->printReleaseWorkerMetadata($releaseWorker);
            if (!$isDryRun) {
                $releaseWorker->work($version);
            }
        }
        if ($isDryRun) {
            $this->symfonyStyle->note('Running in dry mode, nothing is changed');
        } elseif ($stage === null) {
            $message = \sprintf('Version "%s" is now released!', $version->getVersionString());
            $this->symfonyStyle->success($message);
        } else {
            $finishedMessage = \sprintf('Stage "%s" for version "%s" is now finished!', $stage, $version->getVersionString());
            $this->symfonyStyle->success($finishedMessage);
        }
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    private function printReleaseWorkerMetadata(\Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface $releaseWorker) : void
    {
        if (!$this->symfonyStyle->isVerbose()) {
            return;
        }
        // show debug data on -v/--verbose/--debug
        $this->symfonyStyle->writeln('class: ' . \get_class($releaseWorker));
        if ($releaseWorker instanceof \Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\StageAwareInterface) {
            $this->symfonyStyle->writeln('stage: ' . $releaseWorker->getStage());
        }
        $this->symfonyStyle->newLine();
    }
    private function resolveStage(\_PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputInterface $input) : ?string
    {
        $stage = $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::STAGE);
        // string or null
        if ($stage === null) {
            $this->releaseGuard->guardRequiredStageOnEmptyStage();
            return null;
        }
        $stage = (string) $stage;
        $this->releaseGuard->guardStage($stage);
        return $stage;
    }
    private function resolveVersion(\_PhpScoper3a1deaf87850\Symfony\Component\Console\Input\InputInterface $input, ?string $stage) : \_PhpScoper3a1deaf87850\PharIo\Version\Version
    {
        /** @var string $versionArgument */
        $versionArgument = $input->getArgument(\Symplify\MonorepoBuilder\ValueObject\Option::VERSION);
        return $this->versionFactory->createValidVersion($versionArgument, $stage);
    }
    /**
     * @return ReleaseWorkerInterface[]
     */
    private function getReleaseWorkers(?string $stage) : array
    {
        if ($stage === null) {
            return $this->releaseWorkerProvider->provide();
        }
        return $this->releaseWorkerProvider->provideByStage($stage);
    }
}
