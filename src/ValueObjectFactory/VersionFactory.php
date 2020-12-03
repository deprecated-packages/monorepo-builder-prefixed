<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper12b9214dc5a9\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper12b9214dc5a9\PharIo\Version\Version
    {
        return new \_PhpScoper12b9214dc5a9\PharIo\Version\Version($version);
    }
}
