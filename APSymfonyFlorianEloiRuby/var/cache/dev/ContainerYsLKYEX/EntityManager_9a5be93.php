<?php

namespace ContainerYsLKYEX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb61b5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc83b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties726f6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getConnection', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getMetadataFactory', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getExpressionBuilder', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'beginTransaction', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getCache', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'transactional', array('func' => $func), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->transactional($func);
    }

    public function commit()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'commit', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->commit();
    }

    public function rollback()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'rollback', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getClassMetadata', array('className' => $className), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'createQuery', array('dql' => $dql), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'createNamedQuery', array('name' => $name), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'createQueryBuilder', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'flush', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'clear', array('entityName' => $entityName), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->clear($entityName);
    }

    public function close()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'close', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->close();
    }

    public function persist($entity)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'persist', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'remove', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'refresh', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'detach', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'merge', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'contains', array('entity' => $entity), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getEventManager', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getConfiguration', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'isOpen', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getUnitOfWork', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getProxyFactory', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'initializeObject', array('obj' => $obj), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'getFilters', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'isFiltersStateClean', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'hasFilters', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return $this->valueHolderb61b5->hasFilters();
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

        $instance->initializerc83b2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb61b5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb61b5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb61b5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, '__get', ['name' => $name], $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        if (isset(self::$publicProperties726f6[$name])) {
            return $this->valueHolderb61b5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb61b5;

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

        $targetObject = $this->valueHolderb61b5;
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
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb61b5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb61b5;
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
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, '__isset', array('name' => $name), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb61b5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb61b5;
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
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, '__unset', array('name' => $name), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb61b5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb61b5;
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
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, '__clone', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        $this->valueHolderb61b5 = clone $this->valueHolderb61b5;
    }

    public function __sleep()
    {
        $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, '__sleep', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;

        return array('valueHolderb61b5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc83b2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc83b2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc83b2 && ($this->initializerc83b2->__invoke($valueHolderb61b5, $this, 'initializeProxy', array(), $this->initializerc83b2) || 1) && $this->valueHolderb61b5 = $valueHolderb61b5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb61b5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb61b5;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
