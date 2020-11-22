<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker;

use _PhpScoper9b5fd937b4d9\PharIo\Version\Version;
interface ReleaseWorkerInterface
{
    /**
     * 1 line description of what this worker does, in a commanding form! e.g.:
     * - "Add new tag"
     * - "Dump new items to CHANGELOG.md"
     * - "Run coding standards"
     */
    public function getDescription(\_PhpScoper9b5fd937b4d9\PharIo\Version\Version $version) : string;
    public function work(\_PhpScoper9b5fd937b4d9\PharIo\Version\Version $version) : void;
}
