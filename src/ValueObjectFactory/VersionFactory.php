<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperbecbc4cd500f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperbecbc4cd500f\PharIo\Version\Version
    {
        return new \_PhpScoperbecbc4cd500f\PharIo\Version\Version($version);
    }
}
