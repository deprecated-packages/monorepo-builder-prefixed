<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper03a47c44ad4f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper03a47c44ad4f\PharIo\Version\Version
    {
        return new \_PhpScoper03a47c44ad4f\PharIo\Version\Version($version);
    }
}
