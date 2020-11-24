<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker;

use _PhpScoper3ceab9fdc42a\PharIo\Version\Version;
interface ReleaseWorkerInterface
{
    /**
     * 1 line description of what this worker does, in a commanding form! e.g.:
     * - "Add new tag"
     * - "Dump new items to CHANGELOG.md"
     * - "Run coding standards"
     */
    public function getDescription(\_PhpScoper3ceab9fdc42a\PharIo\Version\Version $version) : string;
    public function work(\_PhpScoper3ceab9fdc42a\PharIo\Version\Version $version) : void;
}
