<?php

namespace Proxies\__CG__\Amateur\ObjectBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Enrolled extends \Amateur\ObjectBundle\Entity\Enrolled implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNumber($number)
    {
        $this->__load();
        return parent::setNumber($number);
    }

    public function getNumber()
    {
        $this->__load();
        return parent::getNumber();
    }

    public function setCode($code)
    {
        $this->__load();
        return parent::setCode($code);
    }

    public function getTime()
    {
        $this->__load();
        return parent::getTime();
    }

    public function setTime($time)
    {
        $this->__load();
        return parent::setTime($time);
    }

    public function getCode()
    {
        $this->__load();
        return parent::getCode();
    }

    public function setCategory($category)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setUser($user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getEvent()
    {
        $this->__load();
        return parent::getEvent();
    }

    public function setEvent($event)
    {
        $this->__load();
        return parent::setEvent($event);
    }

    public function getClassification()
    {
        $this->__load();
        return parent::getClassification();
    }

    public function setClassification(\Amateur\ObjectBundle\Entity\Classification $classification)
    {
        $this->__load();
        return parent::setClassification($classification);
    }

    public function getPunctuation()
    {
        $this->__load();
        return parent::getPunctuation();
    }

    public function setPunctuation(\Amateur\ObjectBundle\Entity\Punctuation $punctuation)
    {
        $this->__load();
        return parent::setPunctuation($punctuation);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getSeconds()
    {
        $this->__load();
        return parent::getSeconds();
    }

    public function setSeconds()
    {
        $this->__load();
        return parent::setSeconds();
    }

    public function getObjetive()
    {
        $this->__load();
        return parent::getObjetive();
    }

    public function setObjetive($objetive)
    {
        $this->__load();
        return parent::setObjetive($objetive);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'number', 'code', 'time', 'objetive', 'classification', 'punctuation', 'user', 'event', 'category');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}