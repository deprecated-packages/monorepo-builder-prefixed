<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\ComposerKeyMerger;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface;
final class RequireDevComposerKeyMerger extends \Symplify\MonorepoBuilder\Merge\ComposerKeyMerger\AbstractComposerKeyMerger implements \Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface
{
    public function merge(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson) : void
    {
        if ($newComposerJson->getRequireDev() === []) {
            return;
        }
        $requireDev = $this->mergeAndSort($newComposerJson->getRequireDev(), $mainComposerJson->getRequireDev());
        $mainComposerJson->setRequireDev($requireDev);
    }
}
