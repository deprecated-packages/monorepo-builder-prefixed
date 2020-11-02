<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\ComposerJsonDecorator;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Configuration\ModifyingComposerJsonProvider;
use Symplify\MonorepoBuilder\Merge\Contract\ComposerJsonDecoratorInterface;
/**
 * @see \Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\RemoverComposerJsonDecoratorTest
 * @see \Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\RemoverComposerJsonDecorator\RemoverComposerJsonDecoratorTest
 */
final class RemoverComposerJsonDecorator implements \Symplify\MonorepoBuilder\Merge\Contract\ComposerJsonDecoratorInterface
{
    /**
     * @var ModifyingComposerJsonProvider
     */
    private $modifyingComposerJsonProvider;
    public function __construct(\Symplify\MonorepoBuilder\Merge\Configuration\ModifyingComposerJsonProvider $modifyingComposerJsonProvider)
    {
        $this->modifyingComposerJsonProvider = $modifyingComposerJsonProvider;
    }
    public function decorate(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJson) : void
    {
        $removingComposerJson = $this->modifyingComposerJsonProvider->getRemovingComposerJson();
        if ($removingComposerJson === null) {
            return;
        }
        $this->processRequire($composerJson, $removingComposerJson);
        $this->processRequireDev($composerJson, $removingComposerJson);
        $this->processAutoload($composerJson, $removingComposerJson);
        $this->processAutoloadDev($composerJson, $removingComposerJson);
        $this->processRoot($composerJson, $removingComposerJson);
    }
    private function processRequire(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJsonToRemove) : void
    {
        if ($composerJsonToRemove->getRequire() === []) {
            return;
        }
        $currentRequire = $composerJson->getRequire();
        $packages = \array_keys($composerJsonToRemove->getRequire());
        foreach ($packages as $package) {
            unset($currentRequire[$package]);
        }
        $composerJson->setRequire($currentRequire);
    }
    private function processRequireDev(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJsonToRemove) : void
    {
        if ($composerJsonToRemove->getRequireDev() === []) {
            return;
        }
        $currentRequireDev = $composerJson->getRequireDev();
        $packages = \array_keys($composerJsonToRemove->getRequireDev());
        foreach ($packages as $package) {
            unset($currentRequireDev[$package]);
        }
        $composerJson->setRequireDev($currentRequireDev);
    }
    private function processAutoload(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJsonToRemove) : void
    {
        if ($composerJsonToRemove->getAutoload() === []) {
            return;
        }
        $currentAutoload = $composerJson->getAutoload();
        $autoloads = $composerJsonToRemove->getAutoload();
        foreach ($autoloads as $type => $autoloadList) {
            if (!\is_array($autoloadList)) {
                continue;
            }
            $autoloadListKeys = \array_keys($autoloadList);
            foreach ($autoloadListKeys as $namespace) {
                unset($currentAutoload[$type][$namespace]);
            }
        }
        $composerJson->setAutoload($currentAutoload);
    }
    private function processAutoloadDev(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJsonToRemove) : void
    {
        if ($composerJsonToRemove->getAutoloadDev() === []) {
            return;
        }
        $currentAutoloadDev = $composerJson->getAutoloadDev();
        $autoloadDev = $composerJsonToRemove->getAutoloadDev();
        foreach ($autoloadDev as $type => $autoloadList) {
            if (!\is_array($autoloadList)) {
                continue;
            }
            $autoloadListKeys = \array_keys($autoloadList);
            foreach ($autoloadListKeys as $namespace) {
                unset($currentAutoloadDev[$type][$namespace]);
            }
        }
        $composerJson->setAutoloadDev($currentAutoloadDev);
    }
    private function processRoot(\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $composerJson, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson $removingComposerJson) : void
    {
        if ($removingComposerJson->getMinimumStability()) {
            $composerJson->removeMinimumStability();
        }
        if ($removingComposerJson->getPreferStable()) {
            $composerJson->removePreferStable();
        }
    }
}
