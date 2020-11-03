<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\DependencyInjection\CompilerPass;

use _PhpScopera42d72b2de70\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopera42d72b2de70\Symfony\Component\DependencyInjection\ContainerBuilder;
final class AutowireInterfacesCompilerPass implements \_PhpScopera42d72b2de70\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * @var string[]
     */
    private $typesToAutowire = [];
    /**
     * @param string[] $typesToAutowire
     */
    public function __construct(array $typesToAutowire)
    {
        $this->typesToAutowire = $typesToAutowire;
    }
    public function process(\_PhpScopera42d72b2de70\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilderDefinitions = $containerBuilder->getDefinitions();
        foreach ($containerBuilderDefinitions as $definition) {
            foreach ($this->typesToAutowire as $typeToAutowire) {
                if (!\is_a((string) $definition->getClass(), $typeToAutowire, \true)) {
                    continue;
                }
                $definition->setAutowired(\true);
                continue 2;
            }
        }
    }
}
