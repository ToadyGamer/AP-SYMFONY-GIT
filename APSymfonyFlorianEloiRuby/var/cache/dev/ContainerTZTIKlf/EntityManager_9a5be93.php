<?php

namespace ContainerTZTIKlf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8b4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1bec4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59c3e = [
        
    ];

    public function getConnection()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getConnection', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getMetadataFactory', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getExpressionBuilder', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'beginTransaction', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getCache', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'transactional', array('func' => $func), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->transactional($func);
    }

    public function commit()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'commit', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->commit();
    }

    public function rollback()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'rollback', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getClassMetadata', array('className' => $className), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'createQuery', array('dql' => $dql), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'createNamedQuery', array('name' => $name), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'createQueryBuilder', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'flush', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'clear', array('entityName' => $entityName), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->clear($entityName);
    }

    public function close()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'close', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->close();
    }

    public function persist($entity)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'persist', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'remove', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'refresh', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'detach', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'merge', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'contains', array('entity' => $entity), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getEventManager', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getConfiguration', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'isOpen', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getUnitOfWork', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getProxyFactory', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'initializeObject', array('obj' => $obj), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'getFilters', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'isFiltersStateClean', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'hasFilters', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return $this->valueHolderc8b4e->hasFilters();
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

        $instance->initializer1bec4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc8b4e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8b4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8b4e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, '__get', ['name' => $name], $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        if (isset(self::$publicProperties59c3e[$name])) {
            return $this->valueHolderc8b4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8b4e;

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

        $targetObject = $this->valueHolderc8b4e;
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
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8b4e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8b4e;
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
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, '__isset', array('name' => $name), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8b4e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc8b4e;
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
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, '__unset', array('name' => $name), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8b4e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc8b4e;
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
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, '__clone', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        $this->valueHolderc8b4e = clone $this->valueHolderc8b4e;
    }

    public function __sleep()
    {
        $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, '__sleep', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;

        return array('valueHolderc8b4e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1bec4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1bec4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1bec4 && ($this->initializer1bec4->__invoke($valueHolderc8b4e, $this, 'initializeProxy', array(), $this->initializer1bec4) || 1) && $this->valueHolderc8b4e = $valueHolderc8b4e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8b4e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8b4e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
