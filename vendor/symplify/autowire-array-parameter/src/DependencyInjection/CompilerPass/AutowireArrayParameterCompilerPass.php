<?php

declare (strict_types=1);
namespace Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass;

use _PhpScoperae7532b8c744\Nette\Utils\Reflection;
use _PhpScoperae7532b8c744\Nette\Utils\Strings;
use ReflectionClass;
use ReflectionMethod;
use ReflectionParameter;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Reference;
use Symplify\PackageBuilder\DependencyInjection\DefinitionFinder;
/**
 * @inspiration https://github.com/nette/di/pull/178
 * Not final just for BC with previous class location
 * @see \Symplify\AutowireArrayParameter\Tests\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPassTest
 */
final class AutowireArrayParameterCompilerPass implements \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * These namespaces are already configured by their bundles/extensions.
     * @var string[]
     */
    private const EXCLUDED_NAMESPACES = ['Doctrine', 'JMS', 'Symfony', 'Sensio', 'Knp', 'EasyCorp', 'Sonata', 'Twig'];
    /**
     * Classes that create circular dependencies
     * @var string[]
     * @noRector
     */
    private $excludedFatalClasses = ['_PhpScoperae7532b8c744\\Symfony\\Component\\Form\\FormExtensionInterface', '_PhpScoperae7532b8c744\\Symfony\\Component\\Asset\\PackageInterface', '_PhpScoperae7532b8c744\\Symfony\\Component\\Config\\Loader\\LoaderInterface', '_PhpScoperae7532b8c744\\Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface', '_PhpScoperae7532b8c744\\EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Configurator\\TypeConfiguratorInterface', '_PhpScoperae7532b8c744\\Sonata\\CoreBundle\\Model\\Adapter\\AdapterInterface', '_PhpScoperae7532b8c744\\Sonata\\Doctrine\\Adapter\\AdapterChain', '_PhpScoperae7532b8c744\\Sonata\\Twig\\Extension\\TemplateExtension'];
    /**
     * @var DefinitionFinder
     */
    private $definitionFinder;
    /**
     * @param string[] $excludedFatalClasses
     */
    public function __construct(array $excludedFatalClasses = [])
    {
        $this->definitionFinder = new \Symplify\PackageBuilder\DependencyInjection\DefinitionFinder();
        $this->excludedFatalClasses = \array_merge($this->excludedFatalClasses, $excludedFatalClasses);
    }
    public function process(\_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $definitions = $containerBuilder->getDefinitions();
        foreach ($definitions as $definition) {
            if ($this->shouldSkipDefinition($containerBuilder, $definition)) {
                continue;
            }
            /** @var ReflectionClass $reflectionClass */
            $reflectionClass = $containerBuilder->getReflectionClass($definition->getClass());
            /** @var ReflectionMethod $constructorMethodReflection */
            $constructorMethodReflection = $reflectionClass->getConstructor();
            $this->processParameters($containerBuilder, $constructorMethodReflection, $definition);
        }
    }
    private function shouldSkipDefinition(\_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Definition $definition) : bool
    {
        if ($definition->isAbstract()) {
            return \true;
        }
        if ($definition->getClass() === null) {
            return \true;
        }
        // here class name can be "%parameter.class%"
        $resolvedClassName = $containerBuilder->getParameterBag()->resolveValue($definition->getClass());
        // skip 3rd party classes, they're autowired by own config
        $excludedNamespacePattern = '#^(' . \implode('|', self::EXCLUDED_NAMESPACES) . ')\\\\#';
        if ((bool) \_PhpScoperae7532b8c744\Nette\Utils\Strings::match($resolvedClassName, $excludedNamespacePattern)) {
            return \true;
        }
        if (\in_array($resolvedClassName, $this->excludedFatalClasses, \true)) {
            return \true;
        }
        if ($definition->getFactory()) {
            return \true;
        }
        $reflectionClass = $containerBuilder->getReflectionClass($definition->getClass());
        if ($reflectionClass === null) {
            return \true;
        }
        if (!$reflectionClass->hasMethod('__construct')) {
            return \true;
        }
        /** @var ReflectionMethod $constructorMethodReflection */
        $constructorMethodReflection = $reflectionClass->getConstructor();
        return !$constructorMethodReflection->getParameters();
    }
    private function processParameters(\_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \ReflectionMethod $reflectionMethod, \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Definition $definition) : void
    {
        $reflectionParameters = $reflectionMethod->getParameters();
        foreach ($reflectionParameters as $reflectionParameter) {
            if ($this->shouldSkipParameter($reflectionMethod, $definition, $reflectionParameter)) {
                continue;
            }
            $parameterType = $this->resolveParameterType($reflectionParameter->getName(), $reflectionMethod);
            if ($parameterType === null) {
                continue;
            }
            $definitionsOfType = $this->definitionFinder->findAllByType($containerBuilder, $parameterType);
            $definitionsOfType = $this->filterOutAbstractDefinitions($definitionsOfType);
            $argumentName = '$' . $reflectionParameter->getName();
            $definition->setArgument($argumentName, $this->createReferencesFromDefinitions($definitionsOfType));
        }
    }
    private function shouldSkipParameter(\ReflectionMethod $reflectionMethod, \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Definition $definition, \ReflectionParameter $reflectionParameter) : bool
    {
        if (!($reflectionParameter->getType() !== null && $reflectionParameter->getType()->getName() === 'array')) {
            return \true;
        }
        // already set
        $argumentName = '$' . $reflectionParameter->getName();
        if (isset($definition->getArguments()[$argumentName])) {
            return \true;
        }
        $parameterType = $this->resolveParameterType($reflectionParameter->getName(), $reflectionMethod);
        if ($parameterType === null) {
            return \true;
        }
        if (\in_array($parameterType, $this->excludedFatalClasses, \true)) {
            return \true;
        }
        if (!\class_exists($parameterType) && !\interface_exists($parameterType)) {
            return \true;
        }
        // prevent circular dependency
        if ($definition->getClass() === null) {
            return \false;
        }
        return \is_a($definition->getClass(), $parameterType, \true);
    }
    private function resolveParameterType(string $parameterName, \ReflectionMethod $reflectionMethod) : ?string
    {
        $parameterDocTypeRegex = '#@param[ \\t]+(?<type>[\\w\\\\]+)\\[\\][ \\t]+\\$' . $parameterName . '#';
        // copied from https://github.com/nette/di/blob/d1c0598fdecef6d3b01e2ace5f2c30214b3108e6/src/DI/Autowiring.php#L215
        $result = \_PhpScoperae7532b8c744\Nette\Utils\Strings::match((string) $reflectionMethod->getDocComment(), $parameterDocTypeRegex);
        if ($result === null) {
            return null;
        }
        // not a class|interface type
        if (\ctype_lower($result['type'][0])) {
            return null;
        }
        return \_PhpScoperae7532b8c744\Nette\Utils\Reflection::expandClassName($result['type'], $reflectionMethod->getDeclaringClass());
    }
    /**
     * Abstract definitions cannot be the target of references
     *
     * @param Definition[] $definitions
     * @return Definition[]
     */
    private function filterOutAbstractDefinitions(array $definitions) : array
    {
        foreach ($definitions as $key => $definition) {
            if ($definition->isAbstract()) {
                unset($definitions[$key]);
            }
        }
        return $definitions;
    }
    /**
     * @param Definition[] $definitions
     * @return Reference[]
     */
    private function createReferencesFromDefinitions(array $definitions) : array
    {
        $references = [];
        $definitionOfTypeNames = \array_keys($definitions);
        foreach ($definitionOfTypeNames as $definitionOfTypeName) {
            $references[] = new \_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Reference($definitionOfTypeName);
        }
        return $references;
    }
}
