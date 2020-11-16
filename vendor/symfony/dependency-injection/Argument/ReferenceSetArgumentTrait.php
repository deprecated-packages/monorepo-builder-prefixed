<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Argument;

use _PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Reference;
/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait ReferenceSetArgumentTrait
{
    private $values;
    /**
     * @param Reference[] $values
     */
    public function __construct(array $values)
    {
        $this->setValues($values);
    }
    /**
     * @return Reference[] The values in the set
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * @param Reference[] $values The service references to put in the set
     */
    public function setValues(array $values)
    {
        foreach ($values as $k => $v) {
            if (null !== $v && !$v instanceof \_PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Reference) {
                throw new \_PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('A %s must hold only Reference instances, "%s" given.', __CLASS__, \is_object($v) ? \get_class($v) : \gettype($v)));
            }
        }
        $this->values = $values;
    }
}
