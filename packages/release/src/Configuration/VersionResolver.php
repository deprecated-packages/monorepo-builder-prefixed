<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Configuration;

use _PhpScoper2e873f93a162\PharIo\Version\Version;
use _PhpScoper2e873f93a162\Symfony\Component\Console\Input\InputInterface;
use Symplify\MonorepoBuilder\Release\Version\VersionFactory;
use Symplify\MonorepoBuilder\ValueObject\Option;
final class VersionResolver
{
    /**
     * @var VersionFactory
     */
    private $versionFactory;
    public function __construct(\Symplify\MonorepoBuilder\Release\Version\VersionFactory $versionFactory)
    {
        $this->versionFactory = $versionFactory;
    }
    public function resolveVersion(\_PhpScoper2e873f93a162\Symfony\Component\Console\Input\InputInterface $input, string $stage) : \_PhpScoper2e873f93a162\PharIo\Version\Version
    {
        /** @var string $versionArgument */
        $versionArgument = $input->getArgument(\Symplify\MonorepoBuilder\ValueObject\Option::VERSION);
        return $this->versionFactory->createValidVersion($versionArgument, $stage);
    }
}
