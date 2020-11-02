<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Testing\PathResolver;

use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * @see \Symplify\MonorepoBuilder\Testing\Tests\PathResolver\PackagePathResolverTest
 */
final class PackagePathResolver
{
    /**
     * See https://getcomposer.org/doc/05-repositories.md#path
     */
    public function resolveRelativePathToLocalPackage(\Symplify\SmartFileSystem\SmartFileInfo $rootComposerFileInfo, \Symplify\SmartFileSystem\SmartFileInfo $packageComposerFileInfo) : string
    {
        $currentDirectory = \dirname($packageComposerFileInfo->getRealPath());
        $nestingLevel = 0;
        while ($currentDirectory . '/composer.json' !== $rootComposerFileInfo->getRealPath()) {
            ++$nestingLevel;
            $currentDirectory = \dirname($currentDirectory);
        }
        $relativeDirectory = $this->resolveRelativeDirectoryToRoot($rootComposerFileInfo, $packageComposerFileInfo);
        return \str_repeat('../', $nestingLevel) . $relativeDirectory;
    }
    private function resolveRelativeDirectoryToRoot(\Symplify\SmartFileSystem\SmartFileInfo $rootComposerFileInfo, \Symplify\SmartFileSystem\SmartFileInfo $packageComposerFileInfo) : string
    {
        $rootDirectory = \dirname($rootComposerFileInfo->getRealPath());
        return \dirname($packageComposerFileInfo->getRelativeFilePathFromDirectory($rootDirectory));
    }
}
