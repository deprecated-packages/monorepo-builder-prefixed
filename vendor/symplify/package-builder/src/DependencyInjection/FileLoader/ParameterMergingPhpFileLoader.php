<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\DependencyInjection\FileLoader;

use _PhpScoperd4e30d8318e8\Symfony\Component\Config\FileLocatorInterface;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symplify\PackageBuilder\Yaml\ParametersMerger;
/**
 * The need:
 * - https://github.com/symfony/symfony/issues/26713
 * - https://github.com/symfony/symfony/pull/21313#issuecomment-372037445
 */
final class ParameterMergingPhpFileLoader extends \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader
{
    /**
     * @var ParametersMerger
     */
    private $parametersMerger;
    public function __construct(\_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperd4e30d8318e8\Symfony\Component\Config\FileLocatorInterface $fileLocator)
    {
        $this->parametersMerger = new \Symplify\PackageBuilder\Yaml\ParametersMerger();
        parent::__construct($containerBuilder, $fileLocator);
    }
    /**
     * Same as parent, just merging parameters instead overriding them
     *
     * @see https://github.com/symplify/symplify/pull/697
     *
     * @param string|null $type
     */
    public function load($resource, $type = null) : void
    {
        // get old parameters
        $oldParameters = $this->container->getParameterBag()->all();
        parent::load($resource);
        foreach ($oldParameters as $key => $oldValue) {
            $newValue = $this->parametersMerger->merge($oldValue, $this->container->getParameter($key));
            $this->container->setParameter($key, $newValue);
        }
    }
}
