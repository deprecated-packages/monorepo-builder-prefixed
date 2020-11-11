<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console\Command;

use _PhpScoper416e75c46c6e\Nette\Utils\Json;
use _PhpScoper416e75c46c6e\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper416e75c46c6e\Symfony\Component\Console\Input\InputOption;
use _PhpScoper416e75c46c6e\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\Package\PackageProvider;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class PackagesJsonCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var string
     */
    private const NAMES = 'names';
    /**
     * @var PackageProvider
     */
    private $packageProvider;
    public function __construct(\Symplify\MonorepoBuilder\Package\PackageProvider $packageProvider)
    {
        $this->packageProvider = $packageProvider;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->setDescription('Provides packages in json format. Useful for GitHub Actions Workflow');
        $this->addOption(self::NAMES, null, \_PhpScoper416e75c46c6e\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Return package names');
    }
    protected function execute(\_PhpScoper416e75c46c6e\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper416e75c46c6e\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $data = (bool) $input->getOption(self::NAMES) ? $this->createPackageNames() : $this->createPackagePaths();
        $json = \_PhpScoper416e75c46c6e\Nette\Utils\Json::encode($data);
        $this->symfonyStyle->writeln($json);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    /**
     * @return array<string, string[]>
     */
    private function createPackagePaths() : array
    {
        $packageRelativePaths = [];
        foreach ($this->packageProvider->provide() as $package) {
            $packageRelativePaths[] = $package->getRelativePath();
        }
        return ['package_path' => $packageRelativePaths];
    }
    /**
     * @return array<string, string[]>
     */
    private function createPackageNames() : array
    {
        $packageShortNames = [];
        foreach ($this->packageProvider->provide() as $package) {
            $packageShortNames[] = $package->getShortName();
        }
        return ['package_name' => $packageShortNames];
    }
}
