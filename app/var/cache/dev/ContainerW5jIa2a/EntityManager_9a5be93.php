<?php

namespace ContainerW5jIa2a;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5f074 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer89f97 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties490c2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getConnection', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getMetadataFactory', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getExpressionBuilder', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'beginTransaction', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getCache', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getCache();
    }

    public function transactional($func)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'transactional', array('func' => $func), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'wrapInTransaction', array('func' => $func), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'commit', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->commit();
    }

    public function rollback()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'rollback', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getClassMetadata', array('className' => $className), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'createQuery', array('dql' => $dql), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'createNamedQuery', array('name' => $name), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'createQueryBuilder', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'flush', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'clear', array('entityName' => $entityName), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->clear($entityName);
    }

    public function close()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'close', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->close();
    }

    public function persist($entity)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'persist', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'remove', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'refresh', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'detach', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'merge', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getRepository', array('entityName' => $entityName), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'contains', array('entity' => $entity), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getEventManager', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getConfiguration', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'isOpen', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getUnitOfWork', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getProxyFactory', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'initializeObject', array('obj' => $obj), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'getFilters', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'isFiltersStateClean', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'hasFilters', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return $this->valueHolder5f074->hasFilters();
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

        $instance->initializer89f97 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5f074) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f074 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5f074->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, '__get', ['name' => $name], $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        if (isset(self::$publicProperties490c2[$name])) {
            return $this->valueHolder5f074->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f074;

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

        $targetObject = $this->valueHolder5f074;
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
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f074;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5f074;
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
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, '__isset', array('name' => $name), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f074;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5f074;
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
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, '__unset', array('name' => $name), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f074;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5f074;
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
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, '__clone', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        $this->valueHolder5f074 = clone $this->valueHolder5f074;
    }

    public function __sleep()
    {
        $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, '__sleep', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;

        return array('valueHolder5f074');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer89f97 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer89f97;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer89f97 && ($this->initializer89f97->__invoke($valueHolder5f074, $this, 'initializeProxy', array(), $this->initializer89f97) || 1) && $this->valueHolder5f074 = $valueHolder5f074;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f074;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f074;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
