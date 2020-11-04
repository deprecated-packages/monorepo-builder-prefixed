<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console\Command;

use _PhpScoper130e101f3ca6\Symfony\Component\Console\Command\Command;
use _PhpScoper130e101f3ca6\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper130e101f3ca6\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper130e101f3ca6\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper130e101f3ca6\Symfony\Component\Process\Process;
use Symplify\MonorepoBuilder\DevMasterAliasUpdater;
use Symplify\MonorepoBuilder\Finder\PackageComposerFinder;
use Symplify\MonorepoBuilder\Utils\VersionUtils;
use Symplify\PackageBuilder\Console\ShellCode;
final class PackageAliasCommand extends \_PhpScoper130e101f3ca6\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var PackageComposerFinder
     */
    private $packageComposerFinder;
    /**
     * @var DevMasterAliasUpdater
     */
    private $devMasterAliasUpdater;
    /**
     * @var VersionUtils
     */
    private $versionUtils;
    public function __construct(\_PhpScoper130e101f3ca6\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\MonorepoBuilder\Finder\PackageComposerFinder $packageComposerFinder, \Symplify\MonorepoBuilder\DevMasterAliasUpdater $devMasterAliasUpdater, \Symplify\MonorepoBuilder\Utils\VersionUtils $versionUtils)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->packageComposerFinder = $packageComposerFinder;
        $this->devMasterAliasUpdater = $devMasterAliasUpdater;
        $this->versionUtils = $versionUtils;
    }
    protected function configure() : void
    {
        $this->setDescription('Updates branch alias in "composer.json" all found packages');
    }
    protected function execute(\_PhpScoper130e101f3ca6\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper130e101f3ca6\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $composerPackageFiles = $this->packageComposerFinder->getPackageComposerFiles();
        if (\count($composerPackageFiles) === 0) {
            $this->symfonyStyle->error('No "composer.json" were found in packages.');
            return \Symplify\PackageBuilder\Console\ShellCode::ERROR;
        }
        $expectedAlias = $this->getExpectedAlias();
        $this->devMasterAliasUpdater->updateFileInfosWithAlias($composerPackageFiles, $expectedAlias);
        $message = \sprintf('Alias "dev-master" was updated to "%s" in all packages.', $expectedAlias);
        $this->symfonyStyle->success($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    private function getExpectedAlias() : string
    {
        $process = new \_PhpScoper130e101f3ca6\Symfony\Component\Process\Process(['git', 'describe', '--abbrev=0', '--tags']);
        $process->run();
        $output = $process->getOutput();
        return $this->versionUtils->getNextAliasFormat($output);
    }
}
