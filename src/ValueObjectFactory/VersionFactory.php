<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperef96225926e2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperef96225926e2\PharIo\Version\Version
    {
        return new \_PhpScoperef96225926e2\PharIo\Version\Version($version);
    }
}
