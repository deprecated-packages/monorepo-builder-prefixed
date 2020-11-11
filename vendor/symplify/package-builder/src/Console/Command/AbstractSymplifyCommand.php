<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Command;

use _PhpScoper5a7e73320450\Symfony\Component\Console\Command\Command;
use _PhpScoper5a7e73320450\Symfony\Component\Console\Input\InputOption;
use _PhpScoper5a7e73320450\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\SmartFileSystem\SmartFileSystem;
abstract class AbstractSymplifyCommand extends \_PhpScoper5a7e73320450\Symfony\Component\Console\Command\Command
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
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::CONFIG, 'c', \_PhpScoper5a7e73320450\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Path to config file', \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
    }
    /**
     * @required
     */
    public function autowireAbstractSymplifyCommand(\_PhpScoper5a7e73320450\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem) : void
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->smartFileSystem = $smartFileSystem;
    }
}
