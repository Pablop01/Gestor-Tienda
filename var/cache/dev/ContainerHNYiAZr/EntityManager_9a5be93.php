<?php

namespace ContainerHNYiAZr;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder28272 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7466f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74691 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getConnection', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getMetadataFactory', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getExpressionBuilder', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'beginTransaction', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getCache', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'transactional', array('func' => $func), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'commit', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->commit();
    }

    public function rollback()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'rollback', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getClassMetadata', array('className' => $className), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'createQuery', array('dql' => $dql), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'createNamedQuery', array('name' => $name), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'createQueryBuilder', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'flush', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'clear', array('entityName' => $entityName), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->clear($entityName);
    }

    public function close()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'close', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->close();
    }

    public function persist($entity)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'persist', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'remove', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'refresh', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'detach', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'merge', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'contains', array('entity' => $entity), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getEventManager', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getConfiguration', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'isOpen', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getUnitOfWork', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getProxyFactory', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'initializeObject', array('obj' => $obj), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'getFilters', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'isFiltersStateClean', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'hasFilters', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return $this->valueHolder28272->hasFilters();
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

        $instance->initializer7466f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder28272) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder28272 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder28272->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, '__get', ['name' => $name], $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        if (isset(self::$publicProperties74691[$name])) {
            return $this->valueHolder28272->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28272;

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

        $targetObject = $this->valueHolder28272;
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
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28272;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28272;
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
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, '__isset', array('name' => $name), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28272;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder28272;
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
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, '__unset', array('name' => $name), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28272;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder28272;
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
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, '__clone', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        $this->valueHolder28272 = clone $this->valueHolder28272;
    }

    public function __sleep()
    {
        $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, '__sleep', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;

        return array('valueHolder28272');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7466f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7466f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7466f && ($this->initializer7466f->__invoke($valueHolder28272, $this, 'initializeProxy', array(), $this->initializer7466f) || 1) && $this->valueHolder28272 = $valueHolder28272;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28272;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28272;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
