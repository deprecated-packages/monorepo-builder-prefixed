<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\GitHubActionsWorkflow;

use _PhpScoper058a557299a1\Nette\Utils\Strings;
use Symplify\MonorepoBuilder\ValueObject\Package;
use Symplify\SmartFileSystem\SmartFileInfo;
final class MissingPackageInWorkflowResolver
{
    /**
     * @param Package[] $packages
     * @return Package[]
     */
    public function resolveInFileInfo(array $packages, \Symplify\SmartFileSystem\SmartFileInfo $workflowFileInfo) : array
    {
        $missingPackages = [];
        foreach ($packages as $package) {
            $packageNameItemPattern = '#\\-\\s+' . \preg_quote($package->getShortDirectory(), '#') . '\\b#';
            if (\_PhpScoper058a557299a1\Nette\Utils\Strings::match($workflowFileInfo->getContents(), $packageNameItemPattern)) {
                // not important
                continue;
            }
            $missingPackages[] = $package;
        }
        return $missingPackages;
    }
}
