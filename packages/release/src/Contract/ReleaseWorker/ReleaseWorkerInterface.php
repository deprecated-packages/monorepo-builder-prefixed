<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker;

use _PhpScoper204b3b8f3e0d\PharIo\Version\Version;
interface ReleaseWorkerInterface
{
    /**
     * 1 line description of what this worker does, in a commanding form! e.g.:
     * - "Add new tag"
     * - "Dump new items to CHANGELOG.md"
     * - "Run coding standards"
     */
    public function getDescription(\_PhpScoper204b3b8f3e0d\PharIo\Version\Version $version) : string;
    public function work(\_PhpScoper204b3b8f3e0d\PharIo\Version\Version $version) : void;
}
