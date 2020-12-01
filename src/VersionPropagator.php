<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder;

use _PhpScoperd8a347ec1761\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\ValueObject\File;
final class VersionPropagator
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct(\_PhpScoperd8a347ec1761\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        $this->symfonyStyle = $symfonyStyle;
    }
    /**
     * @param array<string, string> $filesToVersion
     * @return array<string, string>
     */
    public function processManualConfigFiles(array $filesToVersion, string $packageName, string $newVersion) : array
    {
        if (!isset($filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::CONFIG])) {
            return $filesToVersion;
        }
        $message = \sprintf('Update "%s" to "%s" version in "%s" file manually', $packageName, $newVersion, \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
        $this->symfonyStyle->warning($message);
        unset($filesToVersion[\Symplify\MonorepoBuilder\ValueObject\File::CONFIG]);
        return $filesToVersion;
    }
}
