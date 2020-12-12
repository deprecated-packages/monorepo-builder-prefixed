<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdf352df6d893\Symfony\Component\Console\Event;

use _PhpScoperdf352df6d893\Symfony\Component\Console\Command\Command;
use _PhpScoperdf352df6d893\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperdf352df6d893\Symfony\Component\Console\Output\OutputInterface;
/**
 * Allows to handle throwables thrown while running a command.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
final class ConsoleErrorEvent extends \_PhpScoperdf352df6d893\Symfony\Component\Console\Event\ConsoleEvent
{
    private $error;
    private $exitCode;
    public function __construct(\_PhpScoperdf352df6d893\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperdf352df6d893\Symfony\Component\Console\Output\OutputInterface $output, \Throwable $error, \_PhpScoperdf352df6d893\Symfony\Component\Console\Command\Command $command = null)
    {
        parent::__construct($command, $input, $output);
        $this->error = $error;
    }
    public function getError() : \Throwable
    {
        return $this->error;
    }
    public function setError(\Throwable $error) : void
    {
        $this->error = $error;
    }
    public function setExitCode(int $exitCode) : void
    {
        $this->exitCode = $exitCode;
        $r = new \ReflectionProperty($this->error, 'code');
        $r->setAccessible(\true);
        $r->setValue($this->error, $this->exitCode);
    }
    public function getExitCode() : int
    {
        return null !== $this->exitCode ? $this->exitCode : (\is_int($this->error->getCode()) && 0 !== $this->error->getCode() ? $this->error->getCode() : 1);
    }
}
