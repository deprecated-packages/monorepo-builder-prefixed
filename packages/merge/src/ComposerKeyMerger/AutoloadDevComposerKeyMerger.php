<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\ComposerKeyMerger;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface;
use Symplify\MonorepoBuilder\Merge\Validation\AutoloadPathValidator;
final class AutoloadDevComposerKeyMerger extends \Symplify\MonorepoBuilder\Merge\ComposerKeyMerger\AbstractComposerKeyMerger implements \Symplify\MonorepoBuilder\Merge\Contract\ComposerKeyMergerInterface
{
    /**
     * @var AutoloadPathValidator
     */
    private $autoloadPathValidator;
    public function __construct(\Symplify\MonorepoBuilder\Merge\Validation\AutoloadPathValidator $autoloadPathValidator)
    {
        $this->autoloadPathValidator = $autoloadPathValidator;
    }
    public function merge(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $mainComposerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $newComposerJson) : void
    {
        if ($newComposerJson->getAutoloadDev() === []) {
            return;
        }
        $this->autoloadPathValidator->ensureAutoloadPathExists($newComposerJson);
        $autoloadDev = $this->mergeRecursiveAndSort($mainComposerJson->getAutoloadDev(), $newComposerJson->getAutoloadDev());
        $mainComposerJson->setAutoloadDev($autoloadDev);
    }
}
