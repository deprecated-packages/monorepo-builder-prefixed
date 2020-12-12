<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperad5317739bda\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperad5317739bda\PharIo\Version\Version
    {
        return new \_PhpScoperad5317739bda\PharIo\Version\Version($version);
    }
}
