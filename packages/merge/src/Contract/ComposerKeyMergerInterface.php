<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Contract;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
interface ComposerKeyMergerInterface
{
    public function merge(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newToMerge) : void;
}
