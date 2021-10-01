<?php

namespace ContainerRQuwwzs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder05a86 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4a5c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties190f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getConnection', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getMetadataFactory', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getExpressionBuilder', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'beginTransaction', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getCache', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'transactional', array('func' => $func), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->transactional($func);
    }

    public function commit()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'commit', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->commit();
    }

    public function rollback()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'rollback', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'createQuery', array('dql' => $dql), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'createQueryBuilder', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'flush', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'clear', array('entityName' => $entityName), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'close', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->close();
    }

    public function persist($entity)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'persist', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'remove', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'refresh', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'detach', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'merge', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'contains', array('entity' => $entity), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getEventManager', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getConfiguration', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'isOpen', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getUnitOfWork', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getProxyFactory', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'getFilters', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'isFiltersStateClean', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'hasFilters', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return $this->valueHolder05a86->hasFilters();
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

        $instance->initializerd4a5c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder05a86) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder05a86 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder05a86->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, '__get', ['name' => $name], $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        if (isset(self::$publicProperties190f9[$name])) {
            return $this->valueHolder05a86->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05a86;

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

        $targetObject = $this->valueHolder05a86;
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
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05a86;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder05a86;
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
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, '__isset', array('name' => $name), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05a86;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder05a86;
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
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, '__unset', array('name' => $name), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05a86;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder05a86;
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
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, '__clone', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        $this->valueHolder05a86 = clone $this->valueHolder05a86;
    }

    public function __sleep()
    {
        $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, '__sleep', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;

        return array('valueHolder05a86');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4a5c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4a5c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4a5c && ($this->initializerd4a5c->__invoke($valueHolder05a86, $this, 'initializeProxy', array(), $this->initializerd4a5c) || 1) && $this->valueHolder05a86 = $valueHolder05a86;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder05a86;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder05a86;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
