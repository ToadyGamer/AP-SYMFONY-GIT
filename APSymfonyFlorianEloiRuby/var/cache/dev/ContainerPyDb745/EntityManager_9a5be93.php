<?php

namespace ContainerPyDb745;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ce52 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer490f3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties10c28 = [
        
    ];

    public function getConnection()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getConnection', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getMetadataFactory', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getExpressionBuilder', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'beginTransaction', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getCache', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getCache();
    }

    public function transactional($func)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'transactional', array('func' => $func), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->transactional($func);
    }

    public function commit()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'commit', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->commit();
    }

    public function rollback()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'rollback', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getClassMetadata', array('className' => $className), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'createQuery', array('dql' => $dql), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'createNamedQuery', array('name' => $name), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'createQueryBuilder', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'flush', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'clear', array('entityName' => $entityName), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->clear($entityName);
    }

    public function close()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'close', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->close();
    }

    public function persist($entity)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'persist', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'remove', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'refresh', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'detach', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'merge', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getRepository', array('entityName' => $entityName), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'contains', array('entity' => $entity), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getEventManager', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getConfiguration', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'isOpen', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getUnitOfWork', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getProxyFactory', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'initializeObject', array('obj' => $obj), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'getFilters', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'isFiltersStateClean', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'hasFilters', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return $this->valueHolder9ce52->hasFilters();
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

        $instance->initializer490f3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9ce52) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ce52 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ce52->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, '__get', ['name' => $name], $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        if (isset(self::$publicProperties10c28[$name])) {
            return $this->valueHolder9ce52->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ce52;

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

        $targetObject = $this->valueHolder9ce52;
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
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ce52;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ce52;
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
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, '__isset', array('name' => $name), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ce52;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ce52;
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
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, '__unset', array('name' => $name), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ce52;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ce52;
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
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, '__clone', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        $this->valueHolder9ce52 = clone $this->valueHolder9ce52;
    }

    public function __sleep()
    {
        $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, '__sleep', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;

        return array('valueHolder9ce52');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer490f3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer490f3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer490f3 && ($this->initializer490f3->__invoke($valueHolder9ce52, $this, 'initializeProxy', array(), $this->initializer490f3) || 1) && $this->valueHolder9ce52 = $valueHolder9ce52;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ce52;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ce52;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
