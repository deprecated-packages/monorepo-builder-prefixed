<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Argument\ArgumentInterface;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Parameter;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperab93339c6bca\Symfony\Component\ExpressionLanguage\Expression;
abstract class AbstractConfigurator
{
    const FACTORY = 'unknown';
    /**
     * @var callable(mixed $value, bool $allowService)|null
     */
    public static $valuePreProcessor;
    /** @internal */
    protected $definition;
    public function __call(string $method, array $args)
    {
        if (\method_exists($this, 'set' . $method)) {
            return $this->{'set' . $method}(...$args);
        }
        throw new \BadMethodCallException(\sprintf('Call to undefined method "%s::%s()".', static::class, $method));
    }
    /**
     * Checks that a value is valid, optionally replacing Definition and Reference configurators by their configure value.
     *
     * @param mixed $value
     * @param bool  $allowServices whether Definition and Reference are allowed; by default, only scalars and arrays are
     *
     * @return mixed the value, optionally cast to a Definition/Reference
     */
    public static function processValue($value, $allowServices = \false)
    {
        if (\is_array($value)) {
            foreach ($value as $k => $v) {
                $value[$k] = static::processValue($v, $allowServices);
            }
            return self::$valuePreProcessor ? (self::$valuePreProcessor)($value, $allowServices) : $value;
        }
        if (self::$valuePreProcessor) {
            $value = (self::$valuePreProcessor)($value, $allowServices);
        }
        if ($value instanceof \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\ReferenceConfigurator) {
            return new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Reference($value->id, $value->invalidBehavior);
        }
        if ($value instanceof \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\InlineServiceConfigurator) {
            $def = $value->definition;
            $value->definition = null;
            return $def;
        }
        if ($value instanceof self) {
            throw new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('"%s()" can be used only at the root of service configuration files.', $value::FACTORY));
        }
        switch (\true) {
            case null === $value:
            case \is_scalar($value):
                return $value;
            case $value instanceof \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Argument\ArgumentInterface:
            case $value instanceof \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Definition:
            case $value instanceof \_PhpScoperab93339c6bca\Symfony\Component\ExpressionLanguage\Expression:
            case $value instanceof \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Parameter:
            case $value instanceof \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Reference:
                if ($allowServices) {
                    return $value;
                }
        }
        throw new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Cannot use values of type "%s" in service configuration files.', \get_debug_type($value)));
    }
}
