<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker;

use _PhpScoper7cc068f3f5d1\PharIo\Version\Version;
interface ReleaseWorkerInterface
{
    /**
     * 1 line description of what this worker does, in a commanding form! e.g.:
     * - "Add new tag"
     * - "Dump new items to CHANGELOG.md"
     * - "Run coding standards"
     */
    public function getDescription(\_PhpScoper7cc068f3f5d1\PharIo\Version\Version $version) : string;
    public function work(\_PhpScoper7cc068f3f5d1\PharIo\Version\Version $version) : void;
}
