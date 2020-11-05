<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb445cd48032c\Symfony\Component\DependencyInjection\Config;

use _PhpScoperb445cd48032c\Symfony\Component\Config\Resource\ResourceInterface;
/**
 * Tracks container parameters.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final since Symfony 4.3
 */
class ContainerParametersResource implements \_PhpScoperb445cd48032c\Symfony\Component\Config\Resource\ResourceInterface
{
    private $parameters;
    /**
     * @param array $parameters The container parameters to track
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return 'container_parameters_' . \md5(\serialize($this->parameters));
    }
    /**
     * @return array Tracked parameters
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
