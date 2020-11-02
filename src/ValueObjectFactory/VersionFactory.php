<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperab37dd4d9c3e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperab37dd4d9c3e\PharIo\Version\Version
    {
        return new \_PhpScoperab37dd4d9c3e\PharIo\Version\Version($version);
    }
}
