<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller;

use _PhpScoper138e2990dbdb\Symfony\Component\HttpFoundation\Request;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory;
use _PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface;
/**
 * Responsible for resolving the arguments passed to an action.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentResolver implements \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface
{
    private $argumentMetadataFactory;
    /**
     * @var iterable|ArgumentValueResolverInterface[]
     */
    private $argumentValueResolvers;
    public function __construct(\_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface $argumentMetadataFactory = null, iterable $argumentValueResolvers = [])
    {
        $this->argumentMetadataFactory = $argumentMetadataFactory ?: new \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
        $this->argumentValueResolvers = $argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
    }
    /**
     * {@inheritdoc}
     */
    public function getArguments(\_PhpScoper138e2990dbdb\Symfony\Component\HttpFoundation\Request $request, callable $controller) : array
    {
        $arguments = [];
        foreach ($this->argumentMetadataFactory->createArgumentMetadata($controller) as $metadata) {
            foreach ($this->argumentValueResolvers as $resolver) {
                if (!$resolver->supports($request, $metadata)) {
                    continue;
                }
                $resolved = $resolver->resolve($request, $metadata);
                $atLeastOne = \false;
                foreach ($resolved as $append) {
                    $atLeastOne = \true;
                    $arguments[] = $append;
                }
                if (!$atLeastOne) {
                    throw new \InvalidArgumentException(\sprintf('"%s::resolve()" must yield at least one value.', \get_debug_type($resolver)));
                }
                // continue to the next controller argument
                continue 2;
            }
            $representative = $controller;
            if (\is_array($representative)) {
                $representative = \sprintf('%s::%s()', \get_class($representative[0]), $representative[1]);
            } elseif (\is_object($representative)) {
                $representative = \get_class($representative);
            }
            throw new \RuntimeException(\sprintf('Controller "%s" requires that you provide a value for the "$%s" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', $representative, $metadata->getName()));
        }
        return $arguments;
    }
    public static function getDefaultArgumentValueResolvers() : iterable
    {
        return [new \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), new \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), new \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver(), new \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), new \_PhpScoper138e2990dbdb\Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()];
    }
}
