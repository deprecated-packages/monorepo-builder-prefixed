<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf78d2b40800e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf78d2b40800e\PharIo\Version\Version
    {
        return new \_PhpScoperf78d2b40800e\PharIo\Version\Version($version);
    }
}
