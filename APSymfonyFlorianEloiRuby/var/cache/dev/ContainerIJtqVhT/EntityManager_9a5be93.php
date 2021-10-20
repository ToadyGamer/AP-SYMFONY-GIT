<?php

namespace ContainerIJtqVhT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder06ba0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e2d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties55b65 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getConnection', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getMetadataFactory', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getExpressionBuilder', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'beginTransaction', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getCache', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'transactional', array('func' => $func), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->transactional($func);
    }

    public function commit()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'commit', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->commit();
    }

    public function rollback()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'rollback', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getClassMetadata', array('className' => $className), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'createQuery', array('dql' => $dql), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'createNamedQuery', array('name' => $name), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'createQueryBuilder', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'flush', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'clear', array('entityName' => $entityName), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->clear($entityName);
    }

    public function close()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'close', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->close();
    }

    public function persist($entity)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'persist', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'remove', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'refresh', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'detach', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'merge', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'contains', array('entity' => $entity), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getEventManager', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getConfiguration', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'isOpen', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getUnitOfWork', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getProxyFactory', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'initializeObject', array('obj' => $obj), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'getFilters', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'isFiltersStateClean', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'hasFilters', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return $this->valueHolder06ba0->hasFilters();
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

        $instance->initializer7e2d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder06ba0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder06ba0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder06ba0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, '__get', ['name' => $name], $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        if (isset(self::$publicProperties55b65[$name])) {
            return $this->valueHolder06ba0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06ba0;

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

        $targetObject = $this->valueHolder06ba0;
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
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06ba0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder06ba0;
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
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, '__isset', array('name' => $name), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06ba0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder06ba0;
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
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, '__unset', array('name' => $name), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06ba0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder06ba0;
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
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, '__clone', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        $this->valueHolder06ba0 = clone $this->valueHolder06ba0;
    }

    public function __sleep()
    {
        $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, '__sleep', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;

        return array('valueHolder06ba0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7e2d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7e2d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e2d0 && ($this->initializer7e2d0->__invoke($valueHolder06ba0, $this, 'initializeProxy', array(), $this->initializer7e2d0) || 1) && $this->valueHolder06ba0 = $valueHolder06ba0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder06ba0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder06ba0;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
