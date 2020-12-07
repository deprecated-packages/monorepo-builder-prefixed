<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\ComposerKeyMerger;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface;
final class AuthorComposerKeyMerger extends \Symplify\MonorepoBuilder\Merge\ComposerKeyMerger\AbstractComposerKeyMerger implements \Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface
{
    public function merge(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson) : void
    {
        if ($newComposerJson->getAuthors() === []) {
            return;
        }
        $mainAuthors = \array_column($mainComposerJson->getAuthors(), null, 'name');
        $newAuthors = \array_column($newComposerJson->getAuthors(), null, 'name');
        $authors = \array_merge($mainAuthors, $newAuthors);
        $authors = \array_values($authors);
        $mainComposerJson->setAuthors($authors);
    }
}
