<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\Config\Definition\Builder;

use _PhpScoperbe77f3b0e77d\Symfony\Component\Config\Definition\ScalarNode;
/**
 * This class provides a fluent interface for defining a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ScalarNodeDefinition extends \_PhpScoperbe77f3b0e77d\Symfony\Component\Config\Definition\Builder\VariableNodeDefinition
{
    /**
     * Instantiate a Node.
     *
     * @return ScalarNode The node
     */
    protected function instantiateNode()
    {
        return new \_PhpScoperbe77f3b0e77d\Symfony\Component\Config\Definition\ScalarNode($this->name, $this->parent, $this->pathSeparator);
    }
}
