<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper5861d582764b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper5861d582764b\PharIo\Version\Version
    {
        return new \_PhpScoper5861d582764b\PharIo\Version\Version($version);
    }
}
