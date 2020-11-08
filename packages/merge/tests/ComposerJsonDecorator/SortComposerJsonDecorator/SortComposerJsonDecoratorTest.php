<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\SortComposerJsonDecorator;

use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\MonorepoBuilder\Merge\ComposerJsonDecorator\SortComposerJsonDecorator;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
final class SortComposerJsonDecoratorTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var ComposerJson
     */
    private $composerJson;
    /**
     * @var SortComposerJsonDecorator
     */
    private $sortComposerJsonDecorator;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel::class);
        $this->composerJson = $this->createComposerJson();
        $this->sortComposerJsonDecorator = self::$container->get(\Symplify\MonorepoBuilder\Merge\ComposerJsonDecorator\SortComposerJsonDecorator::class);
    }
    public function test() : void
    {
        $this->sortComposerJsonDecorator->decorate($this->composerJson);
        $this->assertSame(['random-this', 'random-that', 'require', 'require-dev', 'autoload', 'autoload-dev'], $this->composerJson->getOrderedKeys());
    }
    private function createComposerJson() : \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson
    {
        /** @var ComposerJsonFactory $composerJsonFactory */
        $composerJsonFactory = self::$container->get(\Symplify\ComposerJsonManipulator\ComposerJsonFactory::class);
        return $composerJsonFactory->createFromArray(['random-this' => [], 'autoload-dev' => [], 'autoload' => [], 'random-that' => [], 'require-dev' => [], 'require' => []]);
    }
}
