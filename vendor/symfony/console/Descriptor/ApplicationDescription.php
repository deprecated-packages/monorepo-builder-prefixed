<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper722a1d9fee2c\Symfony\Component\Console\Descriptor;

use _PhpScoper722a1d9fee2c\Symfony\Component\Console\Application;
use _PhpScoper722a1d9fee2c\Symfony\Component\Console\Command\Command;
use _PhpScoper722a1d9fee2c\Symfony\Component\Console\Exception\CommandNotFoundException;
/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ApplicationDescription
{
    const GLOBAL_NAMESPACE = '_global';
    private $application;
    private $namespace;
    private $showHidden;
    /**
     * @var array
     */
    private $namespaces;
    /**
     * @var Command[]
     */
    private $commands;
    /**
     * @var Command[]
     */
    private $aliases;
    public function __construct(\_PhpScoper722a1d9fee2c\Symfony\Component\Console\Application $application, string $namespace = null, bool $showHidden = \false)
    {
        $this->application = $application;
        $this->namespace = $namespace;
        $this->showHidden = $showHidden;
    }
    public function getNamespaces() : array
    {
        if (null === $this->namespaces) {
            $this->inspectApplication();
        }
        return $this->namespaces;
    }
    /**
     * @return Command[]
     */
    public function getCommands() : array
    {
        if (null === $this->commands) {
            $this->inspectApplication();
        }
        return $this->commands;
    }
    /**
     * @throws CommandNotFoundException
     */
    public function getCommand(string $name) : \_PhpScoper722a1d9fee2c\Symfony\Component\Console\Command\Command
    {
        if (!isset($this->commands[$name]) && !isset($this->aliases[$name])) {
            throw new \_PhpScoper722a1d9fee2c\Symfony\Component\Console\Exception\CommandNotFoundException(\sprintf('Command %s does not exist.', $name));
        }
        return isset($this->commands[$name]) ? $this->commands[$name] : $this->aliases[$name];
    }
    private function inspectApplication()
    {
        $this->commands = [];
        $this->namespaces = [];
        $all = $this->application->all($this->namespace ? $this->application->findNamespace($this->namespace) : null);
        foreach ($this->sortCommands($all) as $namespace => $commands) {
            $names = [];
            /** @var Command $command */
            foreach ($commands as $name => $command) {
                if (!$command->getName() || !$this->showHidden && $command->isHidden()) {
                    continue;
                }
                if ($command->getName() === $name) {
                    $this->commands[$name] = $command;
                } else {
                    $this->aliases[$name] = $command;
                }
                $names[] = $name;
            }
            $this->namespaces[$namespace] = ['id' => $namespace, 'commands' => $names];
        }
    }
    private function sortCommands(array $commands) : array
    {
        $namespacedCommands = [];
        $globalCommands = [];
        foreach ($commands as $name => $command) {
            $key = $this->application->extractNamespace($name, 1);
            if (!$key) {
                $globalCommands['_global'][$name] = $command;
            } else {
                $namespacedCommands[$key][$name] = $command;
            }
        }
        \ksort($namespacedCommands);
        $namespacedCommands = \array_merge($globalCommands, $namespacedCommands);
        foreach ($namespacedCommands as &$commandsSet) {
            \ksort($commandsSet);
        }
        // unset reference to keep scope clear
        unset($commandsSet);
        return $namespacedCommands;
    }
}
