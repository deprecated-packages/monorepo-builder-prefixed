<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd844fca8af3\Symfony\Component\HttpKernel\Controller;

use _PhpScopercd844fca8af3\Symfony\Component\HttpFoundation\Request;
use _PhpScopercd844fca8af3\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Responsible for resolving the value of an argument based on its metadata.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
interface ArgumentValueResolverInterface
{
    /**
     * Whether this resolver can resolve the value for the given ArgumentMetadata.
     *
     * @return bool
     */
    public function supports(\_PhpScopercd844fca8af3\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercd844fca8af3\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument);
    /**
     * Returns the possible value(s).
     *
     * @return iterable
     */
    public function resolve(\_PhpScopercd844fca8af3\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercd844fca8af3\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument);
}
