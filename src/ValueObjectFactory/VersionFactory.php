<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere6d124d1f7ba\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere6d124d1f7ba\PharIo\Version\Version
    {
        return new \_PhpScopere6d124d1f7ba\PharIo\Version\Version($version);
    }
}
