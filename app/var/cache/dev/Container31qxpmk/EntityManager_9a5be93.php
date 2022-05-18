<?php

namespace Container31qxpmk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5527b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc81bc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties96a92 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getConnection', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getMetadataFactory', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getExpressionBuilder', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'beginTransaction', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getCache', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'transactional', array('func' => $func), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'commit', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->commit();
    }

    public function rollback()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'rollback', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getClassMetadata', array('className' => $className), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'createQuery', array('dql' => $dql), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'createNamedQuery', array('name' => $name), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'createQueryBuilder', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'flush', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'clear', array('entityName' => $entityName), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->clear($entityName);
    }

    public function close()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'close', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->close();
    }

    public function persist($entity)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'persist', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'remove', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'refresh', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'detach', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'merge', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'contains', array('entity' => $entity), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getEventManager', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getConfiguration', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'isOpen', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getUnitOfWork', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getProxyFactory', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'initializeObject', array('obj' => $obj), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'getFilters', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'isFiltersStateClean', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'hasFilters', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return $this->valueHolder5527b->hasFilters();
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

        $instance->initializerc81bc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5527b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5527b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5527b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, '__get', ['name' => $name], $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        if (isset(self::$publicProperties96a92[$name])) {
            return $this->valueHolder5527b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5527b;

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

        $targetObject = $this->valueHolder5527b;
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
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5527b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5527b;
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
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, '__isset', array('name' => $name), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5527b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5527b;
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
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, '__unset', array('name' => $name), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5527b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5527b;
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
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, '__clone', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        $this->valueHolder5527b = clone $this->valueHolder5527b;
    }

    public function __sleep()
    {
        $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, '__sleep', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;

        return array('valueHolder5527b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc81bc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc81bc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc81bc && ($this->initializerc81bc->__invoke($valueHolder5527b, $this, 'initializeProxy', array(), $this->initializerc81bc) || 1) && $this->valueHolder5527b = $valueHolder5527b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5527b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5527b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
