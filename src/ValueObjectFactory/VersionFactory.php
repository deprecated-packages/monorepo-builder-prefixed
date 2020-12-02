<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper056b892061ac\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper056b892061ac\PharIo\Version\Version
    {
        return new \_PhpScoper056b892061ac\PharIo\Version\Version($version);
    }
}
