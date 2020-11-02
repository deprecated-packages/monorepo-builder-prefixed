<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Tests\Package\CombineStringsToArrayJsonMerger;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;
use Symplify\MonorepoBuilder\Merge\Tests\Package\AbstractMergeTestCase;
final class CombineStringsToArrayJsonMergerTest extends \Symplify\MonorepoBuilder\Merge\Tests\Package\AbstractMergeTestCase
{
    public function testIdenticalNamespaces() : void
    {
        if (!\defined('SYMPLIFY_MONOREPO')) {
            $this->markTestSkipped('Already tested on monorepo');
        }
        $expectedComposerJson = $this->getExpectedComposerJson();
        $this->doTestDirectoryMergeToFile(__DIR__ . '/../SourceIdenticalNamespaces', $expectedComposerJson);
    }
    private function getExpectedComposerJson() : \Symplify\ComposerJsonManipulator\ValueObject\ComposerJson
    {
        return $this->createComposerJson(__DIR__ . '/Source/expected.json');
    }
}
