<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Command;

use _PhpScoper3bda9af7e0fd\Nette\Utils\Json;
use _PhpScoper3bda9af7e0fd\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper3bda9af7e0fd\Symfony\Component\Console\Input\InputOption;
use _PhpScoper3bda9af7e0fd\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\Json\PackageJsonProvider;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class PackagesJsonCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var string
     */
    private const NAMES = 'names';
    /**
     * @var PackageJsonProvider
     */
    private $packageJsonProvider;
    public function __construct(\Symplify\MonorepoBuilder\Json\PackageJsonProvider $packageJsonProvider)
    {
        $this->packageJsonProvider = $packageJsonProvider;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->setDescription('Provides packages in json format. Useful for GitHub Actions Workflow');
        $this->addOption(self::NAMES, null, \_PhpScoper3bda9af7e0fd\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Return package names');
    }
    protected function execute(\_PhpScoper3bda9af7e0fd\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper3bda9af7e0fd\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $names = (bool) $input->getOption(self::NAMES);
        $data = $names ? $this->packageJsonProvider->createPackageNames() : $this->packageJsonProvider->createPackagePaths();
        $json = \_PhpScoper3bda9af7e0fd\Nette\Utils\Json::encode($data);
        $this->symfonyStyle->writeln($json);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
