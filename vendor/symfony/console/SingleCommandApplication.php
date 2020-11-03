<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab3ccffcffcd\Symfony\Component\Console;

use _PhpScoperab3ccffcffcd\Symfony\Component\Console\Command\Command;
use _PhpScoperab3ccffcffcd\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperab3ccffcffcd\Symfony\Component\Console\Output\OutputInterface;
/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SingleCommandApplication extends \_PhpScoperab3ccffcffcd\Symfony\Component\Console\Command\Command
{
    private $version = 'UNKNOWN';
    private $running = \false;
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    public function run(\_PhpScoperab3ccffcffcd\Symfony\Component\Console\Input\InputInterface $input = null, \_PhpScoperab3ccffcffcd\Symfony\Component\Console\Output\OutputInterface $output = null) : int
    {
        if ($this->running) {
            return parent::run($input, $output);
        }
        // We use the command name as the application name
        $application = new \_PhpScoperab3ccffcffcd\Symfony\Component\Console\Application($this->getName() ?: 'UNKNOWN', $this->version);
        // Fix the usage of the command displayed with "--help"
        $this->setName($_SERVER['argv'][0]);
        $application->add($this);
        $application->setDefaultCommand($this->getName(), \true);
        $this->running = \true;
        try {
            $ret = $application->run($input, $output);
        } finally {
            $this->running = \false;
        }
        return $ret ?? 1;
    }
}
