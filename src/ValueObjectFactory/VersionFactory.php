<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf2e2fcfe7ee6\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version
    {
        return new \_PhpScoperf2e2fcfe7ee6\PharIo\Version\Version($version);
    }
}
