<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Console\Output;

use _PhpScoper87c95ce1b4e5\SebastianBergmann\Diff\Differ;
use _PhpScoper87c95ce1b4e5\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\ConsoleColorDiff\Console\Formatter\ColorConsoleDiffFormatter;
final class ConsoleDiffer
{
    /**
     * @var Differ
     */
    private $differ;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var ColorConsoleDiffFormatter
     */
    private $colorConsoleDiffFormatter;
    public function __construct(\_PhpScoper87c95ce1b4e5\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \_PhpScoper87c95ce1b4e5\SebastianBergmann\Diff\Differ $differ, \Symplify\ConsoleColorDiff\Console\Formatter\ColorConsoleDiffFormatter $colorConsoleDiffFormatter)
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->differ = $differ;
        $this->colorConsoleDiffFormatter = $colorConsoleDiffFormatter;
    }
    public function diff(string $old, string $new) : void
    {
        $diff = $this->differ->diff($old, $new);
        $consoleFormatted = $this->colorConsoleDiffFormatter->format($diff);
        $this->symfonyStyle->writeln($consoleFormatted);
    }
}
