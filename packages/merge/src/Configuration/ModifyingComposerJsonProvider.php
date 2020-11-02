<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Configuration;

use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
final class ModifyingComposerJsonProvider
{
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    /**
     * @var ComposerJsonFactory
     */
    private $composerJsonFactory;
    public function __construct(\Symplify\ComposerJsonManipulator\ComposerJsonFactory $composerJsonFactory, \Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider)
    {
        $this->parameterProvider = $parameterProvider;
        $this->composerJsonFactory = $composerJsonFactory;
    }
    public function getRemovingComposerJson() : ?\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson
    {
        $dataToRemove = $this->parameterProvider->provideArrayParameter(\Symplify\MonorepoBuilder\ValueObject\Option::DATA_TO_REMOVE);
        if ($dataToRemove === []) {
            return null;
        }
        return $this->composerJsonFactory->createFromArray($dataToRemove);
    }
    public function getAppendingComposerJson() : ?\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson
    {
        $dataToAppend = $this->parameterProvider->provideArrayParameter(\Symplify\MonorepoBuilder\ValueObject\Option::DATA_TO_APPEND);
        if ($dataToAppend === []) {
            return null;
        }
        return $this->composerJsonFactory->createFromArray($dataToAppend);
    }
}
