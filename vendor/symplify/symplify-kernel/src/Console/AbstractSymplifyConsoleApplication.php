<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Console;

use _PhpScoperbecbc4cd500f\Nette\Utils\Strings;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Application;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Command\Command;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Descriptor\TextDescriptor;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Exception\RuntimeException;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Output\OutputInterface;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
abstract class AbstractSymplifyConsoleApplication extends \_PhpScoperbecbc4cd500f\Symfony\Component\Console\Application
{
    /**
     * @var string
     */
    private const COMMAND = 'command';
    /**
     * @var CommandNaming
     */
    private $commandNaming;
    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands, string $name = 'UNKNOWN', string $version = 'UNKNOWN')
    {
        $this->commandNaming = new \Symplify\PackageBuilder\Console\Command\CommandNaming();
        $this->addCommands($commands);
        parent::__construct($name, $version);
    }
    /**
     * Add names to all commands by class-name convention
     * @param Command[] $commands
     */
    public function addCommands(array $commands) : void
    {
        foreach ($commands as $command) {
            $commandName = $this->commandNaming->resolveFromCommand($command);
            $command->setName($commandName);
        }
        parent::addCommands($commands);
    }
    protected function doRunCommand(\_PhpScoperbecbc4cd500f\Symfony\Component\Console\Command\Command $command, \_PhpScoperbecbc4cd500f\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperbecbc4cd500f\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doRunCommandAndShowHelpOnArgumentError($command, $input, $output);
    }
    protected function doRunCommandAndShowHelpOnArgumentError(\_PhpScoperbecbc4cd500f\Symfony\Component\Console\Command\Command $command, \_PhpScoperbecbc4cd500f\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperbecbc4cd500f\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        try {
            return parent::doRunCommand($command, $input, $output);
        } catch (\_PhpScoperbecbc4cd500f\Symfony\Component\Console\Exception\RuntimeException $runtimeException) {
            if (\_PhpScoperbecbc4cd500f\Nette\Utils\Strings::contains($runtimeException->getMessage(), 'Provide required arguments')) {
                $this->cleanExtraCommandArgument($command);
                $textDescriptor = new \_PhpScoperbecbc4cd500f\Symfony\Component\Console\Descriptor\TextDescriptor();
                $textDescriptor->describe($output, $command);
                return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
            }
            throw $runtimeException;
        }
    }
    /**
     * Sometimes there is "command" argument,
     * not really needed on fail of missing argument
     */
    private function cleanExtraCommandArgument(\_PhpScoperbecbc4cd500f\Symfony\Component\Console\Command\Command $command) : void
    {
        $inputDefinition = $command->getDefinition();
        $arguments = $inputDefinition->getArguments();
        if (!isset($arguments[self::COMMAND])) {
            return;
        }
        unset($arguments[self::COMMAND]);
        $inputDefinition->setArguments($arguments);
    }
}
