<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Command;

use _PhpScoper485f3a9238ad\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper485f3a9238ad\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\DevMasterAliasUpdater;
use Symplify\MonorepoBuilder\Finder\PackageComposerFinder;
use Symplify\MonorepoBuilder\Git\ExpectedAliasResolver;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class PackageAliasCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var PackageComposerFinder
     */
    private $packageComposerFinder;
    /**
     * @var DevMasterAliasUpdater
     */
    private $devMasterAliasUpdater;
    /**
     * @var ExpectedAliasResolver
     */
    private $expectedAliasResolver;
    public function __construct(\Symplify\MonorepoBuilder\Finder\PackageComposerFinder $packageComposerFinder, \Symplify\MonorepoBuilder\DevMasterAliasUpdater $devMasterAliasUpdater, \Symplify\MonorepoBuilder\Git\ExpectedAliasResolver $expectedAliasResolver)
    {
        parent::__construct();
        $this->packageComposerFinder = $packageComposerFinder;
        $this->devMasterAliasUpdater = $devMasterAliasUpdater;
        $this->expectedAliasResolver = $expectedAliasResolver;
    }
    protected function configure() : void
    {
        $this->setDescription('Updates branch alias in "composer.json" all found packages');
    }
    protected function execute(\_PhpScoper485f3a9238ad\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper485f3a9238ad\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $composerPackageFiles = $this->packageComposerFinder->getPackageComposerFiles();
        if (\count($composerPackageFiles) === 0) {
            $this->symfonyStyle->error('No "composer.json" were found in packages.');
            return \Symplify\PackageBuilder\Console\ShellCode::ERROR;
        }
        $expectedAlias = $this->expectedAliasResolver->resolve();
        $this->devMasterAliasUpdater->updateFileInfosWithAlias($composerPackageFiles, $expectedAlias);
        $message = \sprintf('Alias "dev-master" was updated to "%s" in all packages.', $expectedAlias);
        $this->symfonyStyle->success($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
