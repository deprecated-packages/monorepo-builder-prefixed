<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker;

use _PhpScopera2f1d1d42b88\PharIo\Version\Version;
interface ReleaseWorkerInterface
{
    /**
     * 1 line description of what this worker does, in a commanding form! e.g.:
     * - "Add new tag"
     * - "Dump new items to CHANGELOG.md"
     * - "Run coding standards"
     */
    public function getDescription(\_PhpScopera2f1d1d42b88\PharIo\Version\Version $version) : string;
    public function work(\_PhpScopera2f1d1d42b88\PharIo\Version\Version $version) : void;
}
