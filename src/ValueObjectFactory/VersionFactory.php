<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdab52924cf3e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdab52924cf3e\PharIo\Version\Version
    {
        return new \_PhpScoperdab52924cf3e\PharIo\Version\Version($version);
    }
}
