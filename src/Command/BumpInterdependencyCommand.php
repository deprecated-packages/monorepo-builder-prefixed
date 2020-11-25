<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Command;

use _PhpScoper93a7e58d9dd1\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper93a7e58d9dd1\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper93a7e58d9dd1\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\DependencyUpdater;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\Validator\SourcesPresenceValidator;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class BumpInterdependencyCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var string
     */
    private const VERSION_ARGUMENT = 'version';
    /**
     * @var DependencyUpdater
     */
    private $dependencyUpdater;
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    /**
     * @var SourcesPresenceValidator
     */
    private $sourcesPresenceValidator;
    public function __construct(\Symplify\MonorepoBuilder\DependencyUpdater $dependencyUpdater, \Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\MonorepoBuilder\Validator\SourcesPresenceValidator $sourcesPresenceValidator)
    {
        parent::__construct();
        $this->dependencyUpdater = $dependencyUpdater;
        $this->composerJsonProvider = $composerJsonProvider;
        $this->sourcesPresenceValidator = $sourcesPresenceValidator;
    }
    protected function configure() : void
    {
        $this->setDescription('Bump dependency of split packages on each other');
        $this->addArgument(self::VERSION_ARGUMENT, \_PhpScoper93a7e58d9dd1\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'New version of inter-dependencies, e.g. "^4.4.2"');
    }
    protected function execute(\_PhpScoper93a7e58d9dd1\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper93a7e58d9dd1\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->sourcesPresenceValidator->validateRootComposerJsonName();
        /** @var string $version */
        $version = $input->getArgument(self::VERSION_ARGUMENT);
        $mainComposerJson = $this->composerJsonProvider->getRootJson();
        // @todo resolve better for only found packages
        // see https://github.com/symplify/symplify/pull/1037/files
        [$vendor] = \explode('/', $mainComposerJson['name']);
        $this->dependencyUpdater->updateFileInfosWithVendorAndVersion($this->composerJsonProvider->getPackagesComposerFileInfos(), $vendor, $version);
        $successMessage = \sprintf('Inter-dependencies of packages were updated to "%s".', $version);
        $this->symfonyStyle->success($successMessage);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
