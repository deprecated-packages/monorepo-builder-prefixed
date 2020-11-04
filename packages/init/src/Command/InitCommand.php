<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Init\Command;

use _PhpScopere32570efa19a\Jean85\PrettyVersions;
use _PhpScopere32570efa19a\Nette\Utils\Json as NetteJson;
use OutOfBoundsException;
use _PhpScopere32570efa19a\PharIo\Version\InvalidVersionException;
use _PhpScopere32570efa19a\PharIo\Version\Version;
use _PhpScopere32570efa19a\Symfony\Component\Console\Command\Command;
use _PhpScopere32570efa19a\Symfony\Component\Console\Input\InputArgument;
use _PhpScopere32570efa19a\Symfony\Component\Console\Input\InputInterface;
use _PhpScopere32570efa19a\Symfony\Component\Console\Output\OutputInterface;
use _PhpScopere32570efa19a\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\SmartFileSystem;
use function dirname;
final class InitCommand extends \_PhpScopere32570efa19a\Symfony\Component\Console\Command\Command
{
    /**
     * @var string
     */
    private const OUTPUT = 'output';
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct(\_PhpScopere32570efa19a\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->smartFileSystem = $smartFileSystem;
    }
    protected function configure() : void
    {
        $this->setDescription('Creates empty monorepo directory and composer.json structure.');
        $this->addArgument(self::OUTPUT, \_PhpScopere32570efa19a\Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'Directory to generate monorepo into.', \getcwd());
    }
    protected function execute(\_PhpScopere32570efa19a\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopere32570efa19a\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        /** @var string $output */
        $output = $input->getArgument(self::OUTPUT);
        $this->smartFileSystem->mirror(__DIR__ . '/../../templates/monorepo', $output);
        // Replace MonorepoBuilder version in monorepo-builder.php
        $filename = \sprintf('%s/%s', $output, \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
        $fileContent = $this->smartFileSystem->readFile($filename);
        $content = \str_replace('<version>', $this->getMonorepoBuilderVersion(), $fileContent);
        $this->smartFileSystem->dumpFile($filename, $content);
        $this->symfonyStyle->success('Congrats! Your first monorepo is here.');
        $message = \sprintf('Try the next step - merge "composer.json" files from packages to the root one:%s "vendor/bin/monorepo-builder merge"', \PHP_EOL);
        $this->symfonyStyle->note($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    /**
     * Returns current version of MonorepoBuilder, contains only major and minor.
     */
    private function getMonorepoBuilderVersion() : string
    {
        $version = null;
        try {
            $prettyVersion = \_PhpScopere32570efa19a\Jean85\PrettyVersions::getVersion('symplify/monorepo-builder')->getPrettyVersion();
            $version = new \_PhpScopere32570efa19a\PharIo\Version\Version(\str_replace('x-dev', '0', $prettyVersion));
        } catch (\OutOfBoundsException|\_PhpScopere32570efa19a\PharIo\Version\InvalidVersionException $exceptoin) {
            // Version might not be explicitly set inside composer.json, looking for "vendor/composer/installed.json"
            $version = $this->extractMonorepoBuilderVersionFromComposer();
        }
        if ($version === null) {
            return 'Unknown';
        }
        return \sprintf('^%d.%d', $version->getMajor()->getValue(), $version->getMinor()->getValue());
    }
    /**
     * Returns current version of MonorepoBuilder extracting it from "vendor/composer/installed.json".
     */
    private function extractMonorepoBuilderVersionFromComposer() : ?\_PhpScopere32570efa19a\PharIo\Version\Version
    {
        $installedJsonFilename = \sprintf('%s/composer/installed.json', \dirname(__DIR__, 6));
        if (\is_file($installedJsonFilename)) {
            $installedJsonFileContent = $this->smartFileSystem->readFile($installedJsonFilename);
            $installedJson = \_PhpScopere32570efa19a\Nette\Utils\Json::decode($installedJsonFileContent);
            foreach ($installedJson as $installedPackage) {
                if ($installedPackage->name === 'symplify/monorepo-builder') {
                    return new \_PhpScopere32570efa19a\PharIo\Version\Version($installedPackage->version);
                }
            }
        }
        return null;
    }
}
