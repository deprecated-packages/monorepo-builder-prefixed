<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Exception\RuntimeException;
use _PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Reference;
/**
 * Throws an exception for any Definitions that have errors and still exist.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class DefinitionErrorExceptionPass extends \_PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue($value, $isRoot = \false)
    {
        if (!$value instanceof \_PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Definition || !$value->hasErrors()) {
            return parent::processValue($value, $isRoot);
        }
        if ($isRoot && !$value->isPublic()) {
            $graph = $this->container->getCompiler()->getServiceReferenceGraph();
            $runtimeException = \false;
            foreach ($graph->getNode($this->currentId)->getInEdges() as $edge) {
                if (!$edge->getValue() instanceof \_PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Reference || \_PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE !== $edge->getValue()->getInvalidBehavior()) {
                    $runtimeException = \false;
                    break;
                }
                $runtimeException = \true;
            }
            if ($runtimeException) {
                return parent::processValue($value, $isRoot);
            }
        }
        // only show the first error so the user can focus on it
        $errors = $value->getErrors();
        $message = \reset($errors);
        throw new \_PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Exception\RuntimeException($message);
    }
}
