<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\Symfony\Component\VarDumper\Dumper\ContextProvider;

use _PhpScoperafeb7177e88e\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperafeb7177e88e\Symfony\Component\VarDumper\Caster\ReflectionCaster;
use _PhpScoperafeb7177e88e\Symfony\Component\VarDumper\Cloner\VarCloner;
/**
 * Tries to provide context from a request.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class RequestContextProvider implements \_PhpScoperafeb7177e88e\Symfony\Component\VarDumper\Dumper\ContextProvider\ContextProviderInterface
{
    private $requestStack;
    private $cloner;
    public function __construct(\_PhpScoperafeb7177e88e\Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        $this->cloner = new \_PhpScoperafeb7177e88e\Symfony\Component\VarDumper\Cloner\VarCloner();
        $this->cloner->setMaxItems(0);
        $this->cloner->addCasters(\_PhpScoperafeb7177e88e\Symfony\Component\VarDumper\Caster\ReflectionCaster::UNSET_CLOSURE_FILE_INFO);
    }
    public function getContext() : ?array
    {
        if (null === ($request = $this->requestStack->getCurrentRequest())) {
            return null;
        }
        $controller = $request->attributes->get('_controller');
        return ['uri' => $request->getUri(), 'method' => $request->getMethod(), 'controller' => $controller ? $this->cloner->cloneVar($controller) : $controller, 'identifier' => \spl_object_hash($request)];
    }
}
