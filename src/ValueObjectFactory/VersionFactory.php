<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper29aa9f1ba53d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper29aa9f1ba53d\PharIo\Version\Version
    {
        return new \_PhpScoper29aa9f1ba53d\PharIo\Version\Version($version);
    }
}
