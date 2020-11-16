<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Command;

use _PhpScoperafeb7177e88e\Symfony\Component\Console\Command\Command;
use _PhpScoperafeb7177e88e\Symfony\Component\Console\Input\InputOption;
use _PhpScoperafeb7177e88e\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\PackageBuilder\ValueObject\Option;
use Symplify\SmartFileSystem\SmartFileSystem;
abstract class AbstractSymplifyCommand extends \_PhpScoperafeb7177e88e\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    protected $symfonyStyle;
    /**
     * @var SmartFileSystem
     */
    protected $smartFileSystem;
    public function __construct()
    {
        parent::__construct();
        $this->addOption(\Symplify\PackageBuilder\ValueObject\Option::CONFIG, 'c', \_PhpScoperafeb7177e88e\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Path to config file');
    }
    /**
     * @required
     */
    public function autowireAbstractSymplifyCommand(\_PhpScoperafeb7177e88e\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem) : void
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->smartFileSystem = $smartFileSystem;
    }
}
