<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Init\Command;

use _PhpScoper0ce3ac6864aa\PharIo\Version\Version;
use _PhpScoper0ce3ac6864aa\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper0ce3ac6864aa\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper0ce3ac6864aa\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\Init\Composer\PackageNameVersionProvider;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class InitCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var string
     */
    private const OUTPUT = 'output';
    /**
     * @var PackageNameVersionProvider
     */
    private $packageNameVersionProvider;
    public function __construct(\Symplify\MonorepoBuilder\Init\Composer\PackageNameVersionProvider $monorepoBuilderVersionExtractor)
    {
        $this->packageNameVersionProvider = $monorepoBuilderVersionExtractor;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->setDescription('Creates empty monorepo directory and composer.json structure.');
        $this->addArgument(self::OUTPUT, \_PhpScoper0ce3ac6864aa\Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'Directory to generate monorepo into.', \getcwd());
    }
    protected function execute(\_PhpScoper0ce3ac6864aa\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper0ce3ac6864aa\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        /** @var string $output */
        $output = $input->getArgument(self::OUTPUT);
        $this->smartFileSystem->mirror(__DIR__ . '/../../templates/monorepo', $output);
        // Replace MonorepoBuilder version in monorepo-builder.php
        $filename = \sprintf('%s/%s', $output, \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
        $fileContent = $this->smartFileSystem->readFile($filename);
        $content = \str_replace('<version>', $this->packageNameVersionProvider->provide('symplify/monorepo-builder'), $fileContent);
        $this->smartFileSystem->dumpFile($filename, $content);
        $this->symfonyStyle->success('Congrats! Your first monorepo is here.');
        $message = \sprintf('Try the next step - merge "composer.json" files from packages to the root one:%s "vendor/bin/monorepo-builder merge"', \PHP_EOL);
        $this->symfonyStyle->note($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
