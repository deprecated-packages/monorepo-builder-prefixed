<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Command;

use _PhpScoperb9e77befe692\Nette\Utils\Json;
use _PhpScoperb9e77befe692\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperb9e77befe692\Symfony\Component\Console\Input\InputOption;
use _PhpScoperb9e77befe692\Symfony\Component\Console\Output\OutputInterface;
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
        $this->addOption(self::NAMES, null, \_PhpScoperb9e77befe692\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Return package names');
    }
    protected function execute(\_PhpScoperb9e77befe692\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperb9e77befe692\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $names = (bool) $input->getOption(self::NAMES);
        $data = $names ? $this->packageJsonProvider->createPackageNames() : $this->packageJsonProvider->createPackagePaths();
        $json = \_PhpScoperb9e77befe692\Nette\Utils\Json::encode($data);
        $this->symfonyStyle->writeln($json);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
