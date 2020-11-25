<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner;

use _PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\ClonerInterface
{
    public static $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\Caster', 'castPhpIncompleteClass'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castCutArray'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castStub'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'castEnum'], 'Closure' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castType'], 'ReflectionGenerator' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castClass'], 'ReflectionFunctionAbstract' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster', 'castZendExtension'], '_PhpScoperfa8ac9431c57\\Doctrine\\Common\\Persistence\\ObjectManager' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\Doctrine\\Common\\Proxy\\Proxy' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castCommonProxy'], '_PhpScoperfa8ac9431c57\\Doctrine\\ORM\\Proxy\\Proxy' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castOrmProxy'], '_PhpScoperfa8ac9431c57\\Doctrine\\ORM\\PersistentCollection' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster', 'castPersistentCollection'], 'DOMException' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNameList' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMImplementation' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNode' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocument'], 'DOMNodeList' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLength'], 'DOMCharacterData' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castAttr'], 'DOMElement' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castElement'], 'DOMText' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castText'], 'DOMTypeinfo' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castTypeinfo'], 'DOMDomError' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDomError'], 'DOMLocator' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castLocator'], 'DOMDocumentType' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castNotation'], 'DOMEntity' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster', 'castXPath'], 'XMLReader' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castException'], 'Error' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castError'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\HttpClient\\CurlHttpClient' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\HttpClient\\NativeHttpClient' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClient'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\HttpClient\\Response\\CurlResponse' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\HttpClient\\Response\\NativeResponse' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\HttpFoundation\\Request' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster', 'castRequest'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castThrowingCasterException'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castTraceStub'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castFrameStub'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\ErrorHandler\\Exception\\SilencedErrorContext' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScoperfa8ac9431c57\\Imagine\\Image\\ImageInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster', 'castImage'], '_PhpScoperfa8ac9431c57\\Ramsey\\Uuid\\UuidInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster', 'castRamseyUuid'], '_PhpScoperfa8ac9431c57\\ProxyManager\\Proxy\\ProxyInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\PHPUnit\\Framework\\MockObject\\MockObject' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\PHPUnit\\Framework\\MockObject\\Stub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\Prophecy\\Prophecy\\ProphecySubjectInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], '_PhpScoperfa8ac9431c57\\Mockery\\MockInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFileObject'], 'SplFixedArray' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castFixedArray'], 'SplHeap' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castOuterIterator'], 'WeakReference' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster', 'castMemcached'], '_PhpScoperfa8ac9431c57\\Ds\\Collection' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castCollection'], '_PhpScoperfa8ac9431c57\\Ds\\Map' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castMap'], '_PhpScoperfa8ac9431c57\\Ds\\Pair' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPair'], '_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\DsCaster', 'castPairStub'], ':curl' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castCurl'], ':dba' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castDba'], ':gd' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castGd'], ':mysql link' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castMysqlLink'], ':pgsql large object' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castLink'], ':pgsql result' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster', 'castResult'], ':process' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':OpenSSL X.509' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster', 'castStreamContext'], ':xml' => ['_PhpScoperfa8ac9431c57\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster', 'castXml']];
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
            return new \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\Data($this->doClone($var));
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
    protected function castObject(\_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
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
            $fileInfo = $r->isInternal() || $r->isSubclassOf(\_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Caster\Caster::castObject($obj, $class, $hasDebugInfo);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(\_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
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
    protected function castResource(\_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
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
            $a = [(\_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Cloner\Stub::TYPE_OBJECT === $stub->type ? \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL : '') . '⚠' => new \_PhpScoperfa8ac9431c57\Symfony\Component\VarDumper\Exception\ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
