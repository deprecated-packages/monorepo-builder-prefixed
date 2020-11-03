<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Console;

use _PhpScoperf48ea5df9e9b\Nette\Utils\Strings;
use _PhpScoperf48ea5df9e9b\Symfony\Component\Console\Application;
use _PhpScoperf48ea5df9e9b\Symfony\Component\Console\Command\Command;
use _PhpScoperf48ea5df9e9b\Symfony\Component\Console\Descriptor\TextDescriptor;
use _PhpScoperf48ea5df9e9b\Symfony\Component\Console\Exception\RuntimeException;
use _PhpScoperf48ea5df9e9b\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperf48ea5df9e9b\Symfony\Component\Console\Output\OutputInterface;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
abstract class AbstractSymplifyConsoleApplication extends \_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Application
{
    /**
     * @var string
     */
    private const COMMAND = 'command';
    /**
     * Add names to all commands by class-name convention
     * @param Command[] $commands
     */
    public function addCommands(array $commands) : void
    {
        $commandNaming = new \Symplify\PackageBuilder\Console\Command\CommandNaming();
        foreach ($commands as $command) {
            $commandName = $commandNaming->resolveFromCommand($command);
            $command->setName($commandName);
        }
        parent::addCommands($commands);
    }
    protected function doRunCommand(\_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Command\Command $command, \_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doRunCommandAndShowHelpOnArgumentError($command, $input, $output);
    }
    protected function doRunCommandAndShowHelpOnArgumentError(\_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Command\Command $command, \_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        try {
            return parent::doRunCommand($command, $input, $output);
        } catch (\_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Exception\RuntimeException $runtimeException) {
            if (\_PhpScoperf48ea5df9e9b\Nette\Utils\Strings::contains($runtimeException->getMessage(), 'Provide required arguments')) {
                $this->cleanExtraCommandArgument($command);
                $textDescriptor = new \_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Descriptor\TextDescriptor();
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
    private function cleanExtraCommandArgument(\_PhpScoperf48ea5df9e9b\Symfony\Component\Console\Command\Command $command) : void
    {
        $arguments = $command->getDefinition()->getArguments();
        if (!isset($arguments[self::COMMAND])) {
            return;
        }
        unset($arguments[self::COMMAND]);
        $command->getDefinition()->setArguments($arguments);
    }
}
