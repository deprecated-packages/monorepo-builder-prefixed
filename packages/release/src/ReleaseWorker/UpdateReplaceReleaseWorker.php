<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScoperb0229f14f861\PharIo\Version\Version;
use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\EasyCI\Exception\ShouldNotHappenException;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
final class UpdateReplaceReleaseWorker implements \Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface
{
    /**
     * @var ComposerJsonProvider
     */
    private $composerJsonProvider;
    /**
     * @var JsonFileManager
     */
    private $jsonFileManager;
    public function __construct(\Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager $jsonFileManager)
    {
        $this->composerJsonProvider = $composerJsonProvider;
        $this->jsonFileManager = $jsonFileManager;
    }
    public function work(\_PhpScoperb0229f14f861\PharIo\Version\Version $version) : void
    {
        $rootComposerJson = $this->composerJsonProvider->getRootComposerJson();
        $replace = $rootComposerJson->getReplace();
        $newReplace = [];
        foreach (\array_keys($replace) as $package) {
            $newReplace[$package] = $version->getVersionString();
        }
        if ($replace === $newReplace) {
            return;
        }
        $rootComposerJson->setReplace($newReplace);
        $rootFileInfo = $rootComposerJson->getFileInfo();
        if ($rootFileInfo === null) {
            throw new \Symplify\EasyCI\Exception\ShouldNotHappenException();
        }
        $this->jsonFileManager->printJsonToFileInfo($rootComposerJson->getJsonArray(), $rootFileInfo);
    }
    public function getDescription(\_PhpScoperb0229f14f861\PharIo\Version\Version $version) : string
    {
        return 'Update "replace" version in "composer.json" to new tag to avoid circular dependencies conflicts';
    }
}
