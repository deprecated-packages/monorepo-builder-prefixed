<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Console;

use _PhpScopera2bd9a9af620\Jean85\PrettyVersions;
use _PhpScopera2bd9a9af620\Symfony\Component\Console\Command\Command;
use _PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputDefinition;
use _PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputInterface;
use _PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputOption;
use _PhpScopera2bd9a9af620\Symfony\Component\Console\Output\OutputInterface;
use Symplify\MonorepoBuilder\Console\Command\BumpInterdependencyCommand;
use Symplify\MonorepoBuilder\Console\Command\ValidateCommand;
use Symplify\MonorepoBuilder\Merge\Command\MergeCommand;
use Symplify\MonorepoBuilder\Release\Command\ReleaseCommand;
use Symplify\MonorepoBuilder\Validator\SourcesPresenceValidator;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication;
final class MonorepoBuilderApplication extends \Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication
{
    /**
     * @var SourcesPresenceValidator
     */
    private $sourcesPresenceValidator;
    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands, \Symplify\MonorepoBuilder\Validator\SourcesPresenceValidator $sourcesPresenceValidator)
    {
        $this->addCommands($commands);
        $this->sourcesPresenceValidator = $sourcesPresenceValidator;
        $version = \_PhpScopera2bd9a9af620\Jean85\PrettyVersions::getVersion('symplify/monorepo-builder');
        parent::__construct($commands, 'Monorepo Builder', $version->getPrettyVersion());
    }
    protected function getDefaultInputDefinition() : \_PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputDefinition
    {
        $inputDefinition = parent::getDefaultInputDefinition();
        $inputDefinition->addOption(new \_PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputOption(\Symplify\MonorepoBuilder\ValueObject\Option::CONFIG, 'c', \_PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Path to config file', \Symplify\MonorepoBuilder\ValueObject\File::CONFIG));
        return $inputDefinition;
    }
    protected function doRunCommand(\_PhpScopera2bd9a9af620\Symfony\Component\Console\Command\Command $command, \_PhpScopera2bd9a9af620\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopera2bd9a9af620\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->validateSources($command);
        return $this->doRunCommandAndShowHelpOnArgumentError($command, $input, $output);
    }
    private function validateSources(\_PhpScopera2bd9a9af620\Symfony\Component\Console\Command\Command $command) : void
    {
        $commandClass = \get_class($command);
        if (\in_array($commandClass, [\Symplify\MonorepoBuilder\Console\Command\ValidateCommand::class, \Symplify\MonorepoBuilder\Merge\Command\MergeCommand::class], \true)) {
            $this->sourcesPresenceValidator->validatePackageComposerJsons();
        }
        if (\in_array($commandClass, [\Symplify\MonorepoBuilder\Console\Command\BumpInterdependencyCommand::class, \Symplify\MonorepoBuilder\Release\Command\ReleaseCommand::class], \true)) {
            $this->sourcesPresenceValidator->validateRootComposerJsonName();
        }
    }
}
