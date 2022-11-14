<?php

namespace ContainerVHG5n4K;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder91eda = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6c8cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties481a0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getConnection', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getMetadataFactory', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getExpressionBuilder', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'beginTransaction', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getCache', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'transactional', array('func' => $func), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'commit', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->commit();
    }

    public function rollback()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'rollback', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'createQuery', array('dql' => $dql), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'createQueryBuilder', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'flush', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'clear', array('entityName' => $entityName), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->clear($entityName);
    }

    public function close()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'close', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->close();
    }

    public function persist($entity)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'persist', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'remove', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'refresh', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'detach', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'merge', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'contains', array('entity' => $entity), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getEventManager', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getConfiguration', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'isOpen', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getUnitOfWork', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getProxyFactory', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'getFilters', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'isFiltersStateClean', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'hasFilters', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return $this->valueHolder91eda->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer6c8cf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder91eda) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder91eda = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder91eda->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, '__get', ['name' => $name], $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        if (isset(self::$publicProperties481a0[$name])) {
            return $this->valueHolder91eda->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91eda;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder91eda;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91eda;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder91eda;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, '__isset', array('name' => $name), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91eda;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder91eda;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, '__unset', array('name' => $name), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91eda;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder91eda;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, '__clone', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        $this->valueHolder91eda = clone $this->valueHolder91eda;
    }

    public function __sleep()
    {
        $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, '__sleep', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;

        return array('valueHolder91eda');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c8cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c8cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6c8cf && ($this->initializer6c8cf->__invoke($valueHolder91eda, $this, 'initializeProxy', array(), $this->initializer6c8cf) || 1) && $this->valueHolder91eda = $valueHolder91eda;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder91eda;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder91eda;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
