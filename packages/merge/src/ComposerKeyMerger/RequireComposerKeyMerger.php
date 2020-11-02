<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\ComposerKeyMerger;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface;
final class RequireComposerKeyMerger extends \Symplify\MonorepoBuilder\Merge\ComposerKeyMerger\AbstractComposerKeyMerger implements \Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface
{
    public function merge(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson) : void
    {
        if ($newComposerJson->getRequire() === []) {
            return;
        }
        $require = $this->mergeAndSort($newComposerJson->getRequire(), $mainComposerJson->getRequire());
        $mainComposerJson->setRequire($require);
    }
}
