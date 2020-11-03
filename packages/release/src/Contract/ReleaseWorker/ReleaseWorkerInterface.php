<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker;

use _PhpScoper6b2f62f5c7a4\PharIo\Version\Version;
interface ReleaseWorkerInterface
{
    /**
     * 1 line description of what this worker does, in a commanding form! e.g.:
     * - "Add new tag"
     * - "Dump new items to CHANGELOG.md"
     * - "Run coding standards"
     */
    public function getDescription(\_PhpScoper6b2f62f5c7a4\PharIo\Version\Version $version) : string;
    public function work(\_PhpScoper6b2f62f5c7a4\PharIo\Version\Version $version) : void;
}
