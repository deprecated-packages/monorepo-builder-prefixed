<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb9e28d9f307\Symfony\Component\Console\Output;

/**
 * ConsoleOutputInterface is the interface implemented by ConsoleOutput class.
 * This adds information about stderr and section output stream.
 *
 * @author Dariusz Górecki <darek.krk@gmail.com>
 */
interface ConsoleOutputInterface extends \_PhpScopereb9e28d9f307\Symfony\Component\Console\Output\OutputInterface
{
    /**
     * Gets the OutputInterface for errors.
     *
     * @return OutputInterface
     */
    public function getErrorOutput();
    public function setErrorOutput(\_PhpScopereb9e28d9f307\Symfony\Component\Console\Output\OutputInterface $error);
    public function section() : \_PhpScopereb9e28d9f307\Symfony\Component\Console\Output\ConsoleSectionOutput;
}
