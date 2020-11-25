<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper44b9ade4c89e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper44b9ade4c89e\PharIo\Version\Version
    {
        return new \_PhpScoper44b9ade4c89e\PharIo\Version\Version($version);
    }
}
