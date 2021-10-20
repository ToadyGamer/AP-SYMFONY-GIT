<?php

namespace ContainerGOiwIEh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercab91 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ccb2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4238c = [
        
    ];

    public function getConnection()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getConnection', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getMetadataFactory', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getExpressionBuilder', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'beginTransaction', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getCache', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'transactional', array('func' => $func), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->transactional($func);
    }

    public function commit()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'commit', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->commit();
    }

    public function rollback()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'rollback', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'createQuery', array('dql' => $dql), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'createQueryBuilder', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'flush', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'clear', array('entityName' => $entityName), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'close', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->close();
    }

    public function persist($entity)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'persist', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'remove', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'refresh', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'detach', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'merge', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'contains', array('entity' => $entity), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getEventManager', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getConfiguration', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'isOpen', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getUnitOfWork', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getProxyFactory', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'getFilters', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'isFiltersStateClean', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'hasFilters', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return $this->valueHoldercab91->hasFilters();
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

        $instance->initializer2ccb2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercab91) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercab91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercab91->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, '__get', ['name' => $name], $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        if (isset(self::$publicProperties4238c[$name])) {
            return $this->valueHoldercab91->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab91;

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

        $targetObject = $this->valueHoldercab91;
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
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab91;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercab91;
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
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, '__isset', array('name' => $name), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab91;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercab91;
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
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, '__unset', array('name' => $name), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab91;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercab91;
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
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, '__clone', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        $this->valueHoldercab91 = clone $this->valueHoldercab91;
    }

    public function __sleep()
    {
        $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, '__sleep', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;

        return array('valueHoldercab91');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ccb2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ccb2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ccb2 && ($this->initializer2ccb2->__invoke($valueHoldercab91, $this, 'initializeProxy', array(), $this->initializer2ccb2) || 1) && $this->valueHoldercab91 = $valueHoldercab91;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercab91;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercab91;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
