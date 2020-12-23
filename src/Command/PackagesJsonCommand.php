<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Command;

use _PhpScopere6d124d1f7ba\Nette\Utils\Json;
use _PhpScopere6d124d1f7ba\Symfony\Component\Console\Input\InputInterface;
use _PhpScopere6d124d1f7ba\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\Json\PackageJsonProvider;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class PackagesJsonCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
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
        $this->setDescription('Provides package paths in json format. Useful for GitHub Actions Workflow');
    }
    protected function execute(\_PhpScopere6d124d1f7ba\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopere6d124d1f7ba\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $packagePaths = $this->packageJsonProvider->providePackages();
        // must be without spaces, otherwise it breaks GitHub Actions json
        $json = \_PhpScopere6d124d1f7ba\Nette\Utils\Json::encode($packagePaths);
        $this->symfonyStyle->writeln($json);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
