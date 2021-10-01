<?php

namespace ContainerXkos9dr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7976e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4786 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa4d0e = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getConnection', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getMetadataFactory', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getExpressionBuilder', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'beginTransaction', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getCache', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'transactional', array('func' => $func), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->transactional($func);
    }

    public function commit()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'commit', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->commit();
    }

    public function rollback()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'rollback', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'createQuery', array('dql' => $dql), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'createQueryBuilder', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'flush', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'clear', array('entityName' => $entityName), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'close', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->close();
    }

    public function persist($entity)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'persist', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'remove', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'refresh', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'detach', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'merge', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'contains', array('entity' => $entity), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getEventManager', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getConfiguration', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'isOpen', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getUnitOfWork', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getProxyFactory', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'getFilters', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'isFiltersStateClean', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'hasFilters', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return $this->valueHolder7976e->hasFilters();
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

        $instance->initializerd4786 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7976e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7976e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7976e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, '__get', ['name' => $name], $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        if (isset(self::$publicPropertiesa4d0e[$name])) {
            return $this->valueHolder7976e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7976e;

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

        $targetObject = $this->valueHolder7976e;
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
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7976e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7976e;
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
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, '__isset', array('name' => $name), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7976e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7976e;
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
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, '__unset', array('name' => $name), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7976e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7976e;
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
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, '__clone', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        $this->valueHolder7976e = clone $this->valueHolder7976e;
    }

    public function __sleep()
    {
        $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, '__sleep', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;

        return array('valueHolder7976e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4786 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4786;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4786 && ($this->initializerd4786->__invoke($valueHolder7976e, $this, 'initializeProxy', array(), $this->initializerd4786) || 1) && $this->valueHolder7976e = $valueHolder7976e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7976e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7976e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
