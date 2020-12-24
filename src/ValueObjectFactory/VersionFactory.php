<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf237fc62366a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf237fc62366a\PharIo\Version\Version
    {
        return new \_PhpScoperf237fc62366a\PharIo\Version\Version($version);
    }
}
