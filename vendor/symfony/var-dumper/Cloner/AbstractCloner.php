<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner;

use _PhpScoper39d95f01712b\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScoper39d95f01712b\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\ClonerInterface
{
    public static $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\Caster', 'castPhpIncompleteClass'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castCutArray'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castEnum'], 'Closure' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castType'], 'ReflectionGenerator' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClass'], 'ReflectionFunctionAbstract' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castZendExtension'], '_PhpScoper39d95f01712b\\Doctrine\\Common\\Persistence\\ObjectManager' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\Doctrine\\Common\\Proxy\\Proxy' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castCommonProxy'], '_PhpScoper39d95f01712b\\Doctrine\\ORM\\Proxy\\Proxy' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castOrmProxy'], '_PhpScoper39d95f01712b\\Doctrine\\ORM\\PersistentCollection' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castPersistentCollection'], 'DOMException' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNameList' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMImplementation' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNode' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocument'], 'DOMNodeList' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMCharacterData' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castAttr'], 'DOMElement' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castElement'], 'DOMText' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castText'], 'DOMTypeinfo' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castTypeinfo'], 'DOMDomError' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDomError'], 'DOMLocator' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLocator'], 'DOMDocumentType' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNotation'], 'DOMEntity' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castXPath'], 'XMLReader' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castException'], 'Error' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castError'], '_PhpScoper39d95f01712b\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\Symfony\\Component\\HttpClient\\CurlHttpClient' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoper39d95f01712b\\Symfony\\Component\\HttpClient\\NativeHttpClient' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoper39d95f01712b\\Symfony\\Component\\HttpClient\\Response\\CurlResponse' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoper39d95f01712b\\Symfony\\Component\\HttpClient\\Response\\NativeResponse' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoper39d95f01712b\\Symfony\\Component\\HttpFoundation\\Request' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castRequest'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castThrowingCasterException'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castTraceStub'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castFrameStub'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\Symfony\\Component\\ErrorHandler\\Exception\\SilencedErrorContext' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScoper39d95f01712b\\Imagine\\Image\\ImageInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster', 'castImage'], '_PhpScoper39d95f01712b\\Ramsey\\Uuid\\UuidInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster', 'castRamseyUuid'], '_PhpScoper39d95f01712b\\ProxyManager\\Proxy\\ProxyInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\PHPUnit\\Framework\\MockObject\\MockObject' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\PHPUnit\\Framework\\MockObject\\Stub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\Prophecy\\Prophecy\\ProphecySubjectInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoper39d95f01712b\\Mockery\\MockInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileObject'], 'SplFixedArray' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFixedArray'], 'SplHeap' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castOuterIterator'], 'WeakReference' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster', 'castMemcached'], '_PhpScoper39d95f01712b\\Ds\\Collection' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castCollection'], '_PhpScoper39d95f01712b\\Ds\\Map' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castMap'], '_PhpScoper39d95f01712b\\Ds\\Pair' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPair'], '_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPairStub'], ':curl' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':dba' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':gd' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':mysql link' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castMysqlLink'], ':pgsql large object' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql result' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castResult'], ':process' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':OpenSSL X.509' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStreamContext'], ':xml' => ['_PhpScoper39d95f01712b\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml']];
    protected $maxItems = 2500;
    protected $maxString = -1;
    protected $minDepth = 1;
    private $casters = [];
    private $prevErrorHandler;
    private $classInfo = [];
    private $filter = 0;
    /**
     * @param callable[]|null $casters A map of casters
     *
     * @see addCasters
     */
    public function __construct(array $casters = null)
    {
        if (null === $casters) {
            $casters = static::$defaultCasters;
        }
        $this->addCasters($casters);
    }
    /**
     * Adds casters for resources and objects.
     *
     * Maps resources or objects types to a callback.
     * Types are in the key, with a callable caster for value.
     * Resource types are to be prefixed with a `:`,
     * see e.g. static::$defaultCasters.
     *
     * @param callable[] $casters A map of casters
     */
    public function addCasters(array $casters)
    {
        foreach ($casters as $type => $callback) {
            $this->casters[$type][] = $callback;
        }
    }
    /**
     * Sets the maximum number of items to clone past the minimum depth in nested structures.
     *
     * @param int $maxItems
     */
    public function setMaxItems($maxItems)
    {
        $this->maxItems = (int) $maxItems;
    }
    /**
     * Sets the maximum cloned length for strings.
     *
     * @param int $maxString
     */
    public function setMaxString($maxString)
    {
        $this->maxString = (int) $maxString;
    }
    /**
     * Sets the minimum tree depth where we are guaranteed to clone all the items.  After this
     * depth is reached, only setMaxItems items will be cloned.
     *
     * @param int $minDepth
     */
    public function setMinDepth($minDepth)
    {
        $this->minDepth = (int) $minDepth;
    }
    /**
     * Clones a PHP variable.
     *
     * @param mixed $var    Any PHP variable
     * @param int   $filter A bit field of Caster::EXCLUDE_* constants
     *
     * @return Data The cloned variable represented by a Data object
     */
    public function cloneVar($var, $filter = 0)
    {
        $this->prevErrorHandler = \set_error_handler(function ($type, $msg, $file, $line, $context = []) {
            if (\E_RECOVERABLE_ERROR === $type || \E_USER_ERROR === $type) {
                // Cloner never dies
                throw new \ErrorException($msg, 0, $type, $file, $line);
            }
            if ($this->prevErrorHandler) {
                return ($this->prevErrorHandler)($type, $msg, $file, $line, $context);
            }
            return \false;
        });
        $this->filter = $filter;
        if ($gc = \gc_enabled()) {
            \gc_disable();
        }
        try {
            return new \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\Data($this->doClone($var));
        } finally {
            if ($gc) {
                \gc_enable();
            }
            \restore_error_handler();
            $this->prevErrorHandler = null;
        }
    }
    /**
     * Effectively clones the PHP variable.
     *
     * @param mixed $var Any PHP variable
     *
     * @return array The cloned variable represented in an array
     */
    protected abstract function doClone($var);
    /**
     * Casts an object to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     *
     * @return array The object casted as array
     */
    protected function castObject(\_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $obj = $stub->value;
        $class = $stub->class;
        if (isset($class[15]) && "\0" === $class[15] && 0 === \strpos($class, "class@anonymous\0")) {
            $stub->class = \get_parent_class($class) . '@anonymous';
        }
        if (isset($this->classInfo[$class])) {
            list($i, $parents, $hasDebugInfo, $fileInfo) = $this->classInfo[$class];
        } else {
            $i = 2;
            $parents = [$class];
            $hasDebugInfo = \method_exists($class, '__debugInfo');
            foreach (\class_parents($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            foreach (\class_implements($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            $parents[] = '*';
            $r = new \ReflectionClass($class);
            $fileInfo = $r->isInternal() || $r->isSubclassOf(\_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Caster\Caster::castObject($obj, $class, $hasDebugInfo);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
    /**
     * Casts a resource to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     *
     * @return array The resource casted as array
     */
    protected function castResource(\_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $a = [];
        $res = $stub->value;
        $type = $stub->class;
        try {
            if (!empty($this->casters[':' . $type])) {
                foreach ($this->casters[':' . $type] as $callback) {
                    $a = $callback($res, $a, $stub, $isNested, $this->filter);
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoper39d95f01712b\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
