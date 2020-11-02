<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\ComposerKeyMerger;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface;
final class ReplaceComposerKeyMerger implements \Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface
{
    public function merge(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson) : void
    {
        if ($newComposerJson->getReplace() === []) {
            return;
        }
        $replace = \array_merge($newComposerJson->getReplace(), $mainComposerJson->getReplace());
        $mainComposerJson->setReplace($replace);
    }
}
