<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Validator;

use _PhpScoperb2110b0b3130\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\SmartFileSystem\SmartFileInfo;
final class ConflictingPackageVersionsReporter
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct(\_PhpScoperb2110b0b3130\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        $this->symfonyStyle = $symfonyStyle;
    }
    /**
     * @param mixed[] $conflictingPackages
     */
    public function report(array $conflictingPackages) : void
    {
        foreach ($conflictingPackages as $packageName => $filesToVersions) {
            $message = \sprintf('Package "%s" has incompatible version', $packageName);
            $this->symfonyStyle->title($message);
            $tableRows = $this->createTableRows($filesToVersions);
            $this->symfonyStyle->table(['File', 'Version'], $tableRows);
        }
        $this->symfonyStyle->error('Found conflicting package versions, fix them first.');
    }
    /**
     * @return array<int, mixed[]>
     */
    private function createTableRows($filesToVersions) : array
    {
        $tableRows = [];
        foreach ($filesToVersions as $file => $version) {
            $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($file);
            $tableRows[] = [$fileInfo->getRelativeFilePathFromCwd(), $version];
        }
        return $tableRows;
    }
}
