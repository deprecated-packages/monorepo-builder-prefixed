<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Console\Output;

use _PhpScoperafeb7177e88e\SebastianBergmann\Diff\Differ;
use _PhpScoperafeb7177e88e\Symfony\Component\Console\Style\SymfonyStyle;
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
    public function __construct(\_PhpScoperafeb7177e88e\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \_PhpScoperafeb7177e88e\SebastianBergmann\Diff\Differ $differ, \Symplify\ConsoleColorDiff\Console\Formatter\ColorConsoleDiffFormatter $colorConsoleDiffFormatter)
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->differ = $differ;
        $this->colorConsoleDiffFormatter = $colorConsoleDiffFormatter;
    }
    public function diff(string $old, string $new) : string
    {
        $diff = $this->differ->diff($old, $new);
        return $this->colorConsoleDiffFormatter->format($diff);
    }
    public function diffAndPrint(string $old, string $new) : void
    {
        $formattedDiff = $this->diff($old, $new);
        $this->symfonyStyle->writeln($formattedDiff);
    }
}
