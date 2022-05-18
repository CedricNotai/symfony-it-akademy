<?php

namespace ContainerS3XSqo8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder63c3b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer06010 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3cbcb = [
        
    ];

    public function getConnection()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getConnection', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getMetadataFactory', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getExpressionBuilder', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'beginTransaction', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getCache', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'transactional', array('func' => $func), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'commit', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->commit();
    }

    public function rollback()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'rollback', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getClassMetadata', array('className' => $className), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'createQuery', array('dql' => $dql), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'createNamedQuery', array('name' => $name), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'createQueryBuilder', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'flush', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'clear', array('entityName' => $entityName), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->clear($entityName);
    }

    public function close()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'close', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->close();
    }

    public function persist($entity)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'persist', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'remove', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'refresh', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'detach', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'merge', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'contains', array('entity' => $entity), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getEventManager', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getConfiguration', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'isOpen', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getUnitOfWork', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getProxyFactory', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'initializeObject', array('obj' => $obj), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'getFilters', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'isFiltersStateClean', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'hasFilters', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return $this->valueHolder63c3b->hasFilters();
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

        $instance->initializer06010 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder63c3b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder63c3b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder63c3b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, '__get', ['name' => $name], $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        if (isset(self::$publicProperties3cbcb[$name])) {
            return $this->valueHolder63c3b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c3b;

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

        $targetObject = $this->valueHolder63c3b;
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
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c3b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder63c3b;
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
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, '__isset', array('name' => $name), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c3b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder63c3b;
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
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, '__unset', array('name' => $name), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c3b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder63c3b;
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
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, '__clone', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        $this->valueHolder63c3b = clone $this->valueHolder63c3b;
    }

    public function __sleep()
    {
        $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, '__sleep', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;

        return array('valueHolder63c3b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer06010 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer06010;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer06010 && ($this->initializer06010->__invoke($valueHolder63c3b, $this, 'initializeProxy', array(), $this->initializer06010) || 1) && $this->valueHolder63c3b = $valueHolder63c3b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder63c3b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder63c3b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
