<?php

namespace ContainerZqnn7R5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere912f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b1fe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1b9e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getConnection', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getMetadataFactory', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getExpressionBuilder', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'beginTransaction', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getCache', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'transactional', array('func' => $func), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->transactional($func);
    }

    public function commit()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'commit', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->commit();
    }

    public function rollback()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'rollback', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getClassMetadata', array('className' => $className), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'createQuery', array('dql' => $dql), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'createNamedQuery', array('name' => $name), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'createQueryBuilder', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'flush', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'clear', array('entityName' => $entityName), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->clear($entityName);
    }

    public function close()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'close', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->close();
    }

    public function persist($entity)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'persist', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'remove', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'refresh', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'detach', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'merge', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'contains', array('entity' => $entity), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getEventManager', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getConfiguration', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'isOpen', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getUnitOfWork', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getProxyFactory', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'initializeObject', array('obj' => $obj), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'getFilters', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'isFiltersStateClean', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'hasFilters', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return $this->valueHoldere912f->hasFilters();
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

        $instance->initializer2b1fe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere912f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere912f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere912f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, '__get', ['name' => $name], $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        if (isset(self::$publicProperties1b9e6[$name])) {
            return $this->valueHoldere912f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere912f;

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

        $targetObject = $this->valueHoldere912f;
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
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere912f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere912f;
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
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, '__isset', array('name' => $name), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere912f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere912f;
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
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, '__unset', array('name' => $name), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere912f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere912f;
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
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, '__clone', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        $this->valueHoldere912f = clone $this->valueHoldere912f;
    }

    public function __sleep()
    {
        $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, '__sleep', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;

        return array('valueHoldere912f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2b1fe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2b1fe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2b1fe && ($this->initializer2b1fe->__invoke($valueHoldere912f, $this, 'initializeProxy', array(), $this->initializer2b1fe) || 1) && $this->valueHoldere912f = $valueHoldere912f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere912f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere912f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
