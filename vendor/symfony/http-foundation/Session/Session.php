<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session;

use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
// Help opcache.preload discover always-needed symbols
\class_exists(\_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag::class);
\class_exists(\_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Flash\FlashBag::class);
\class_exists(\_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\SessionBagProxy::class);
/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Drak <drak@zikula.org>
 */
class Session implements \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\SessionInterface, \IteratorAggregate, \Countable
{
    protected $storage;
    private $flashName;
    private $attributeName;
    private $data = [];
    private $usageIndex = 0;
    private $usageReporter;
    public function __construct(\_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface $storage = null, \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface $attributes = null, \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface $flashes = null, callable $usageReporter = null)
    {
        $this->storage = $storage ?: new \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage();
        $this->usageReporter = $usageReporter;
        $attributes = $attributes ?: new \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag();
        $this->attributeName = $attributes->getName();
        $this->registerBag($attributes);
        $flashes = $flashes ?: new \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Flash\FlashBag();
        $this->flashName = $flashes->getName();
        $this->registerBag($flashes);
    }
    /**
     * {@inheritdoc}
     */
    public function start()
    {
        return $this->storage->start();
    }
    /**
     * {@inheritdoc}
     */
    public function has(string $name)
    {
        return $this->getAttributeBag()->has($name);
    }
    /**
     * {@inheritdoc}
     */
    public function get(string $name, $default = null)
    {
        return $this->getAttributeBag()->get($name, $default);
    }
    /**
     * {@inheritdoc}
     */
    public function set(string $name, $value)
    {
        $this->getAttributeBag()->set($name, $value);
    }
    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return $this->getAttributeBag()->all();
    }
    /**
     * {@inheritdoc}
     */
    public function replace(array $attributes)
    {
        $this->getAttributeBag()->replace($attributes);
    }
    /**
     * {@inheritdoc}
     */
    public function remove(string $name)
    {
        return $this->getAttributeBag()->remove($name);
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->getAttributeBag()->clear();
    }
    /**
     * {@inheritdoc}
     */
    public function isStarted()
    {
        return $this->storage->isStarted();
    }
    /**
     * Returns an iterator for attributes.
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->getAttributeBag()->all());
    }
    /**
     * Returns the number of attributes.
     *
     * @return int
     */
    public function count()
    {
        return \count($this->getAttributeBag()->all());
    }
    public function &getUsageIndex() : int
    {
        return $this->usageIndex;
    }
    /**
     * @internal
     */
    public function isEmpty() : bool
    {
        if ($this->isStarted()) {
            ++$this->usageIndex;
            if ($this->usageReporter && 0 <= $this->usageIndex) {
                ($this->usageReporter)();
            }
        }
        foreach ($this->data as &$data) {
            if (!empty($data)) {
                return \false;
            }
        }
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    public function invalidate(int $lifetime = null)
    {
        $this->storage->clear();
        return $this->migrate(\true, $lifetime);
    }
    /**
     * {@inheritdoc}
     */
    public function migrate(bool $destroy = \false, int $lifetime = null)
    {
        return $this->storage->regenerate($destroy, $lifetime);
    }
    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $this->storage->save();
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->storage->getId();
    }
    /**
     * {@inheritdoc}
     */
    public function setId(string $id)
    {
        if ($this->storage->getId() !== $id) {
            $this->storage->setId($id);
        }
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->storage->getName();
    }
    /**
     * {@inheritdoc}
     */
    public function setName(string $name)
    {
        $this->storage->setName($name);
    }
    /**
     * {@inheritdoc}
     */
    public function getMetadataBag()
    {
        ++$this->usageIndex;
        if ($this->usageReporter && 0 <= $this->usageIndex) {
            ($this->usageReporter)();
        }
        return $this->storage->getMetadataBag();
    }
    /**
     * {@inheritdoc}
     */
    public function registerBag(\_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag)
    {
        $this->storage->registerBag(new \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\SessionBagProxy($bag, $this->data, $this->usageIndex, $this->usageReporter));
    }
    /**
     * {@inheritdoc}
     */
    public function getBag(string $name)
    {
        $bag = $this->storage->getBag($name);
        return \method_exists($bag, 'getBag') ? $bag->getBag() : $bag;
    }
    /**
     * Gets the flashbag interface.
     *
     * @return FlashBagInterface
     */
    public function getFlashBag()
    {
        return $this->getBag($this->flashName);
    }
    /**
     * Gets the attributebag interface.
     *
     * Note that this method was added to help with IDE autocompletion.
     */
    private function getAttributeBag() : \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface
    {
        return $this->getBag($this->attributeName);
    }
}
