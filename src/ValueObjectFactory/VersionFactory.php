<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper018f70acf6cc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper018f70acf6cc\PharIo\Version\Version
    {
        return new \_PhpScoper018f70acf6cc\PharIo\Version\Version($version);
    }
}
