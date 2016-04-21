<?php

namespace Proxies\__CG__\Xtending\EntityBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CriterioValor extends \Xtending\EntityBundle\Entity\CriterioValor implements \Doctrine\ORM\Proxy\Proxy
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

    public function setlabelsCaratulaValor($label)
    {
        $this->__load();
        return parent::setlabelsCaratulaValor($label);
    }

    public function addLabelsCaratulaValor($label)
    {
        $this->__load();
        return parent::addLabelsCaratulaValor($label);
    }

    public function removeLabelsCaratulaValor($label)
    {
        $this->__load();
        return parent::removeLabelsCaratulaValor($label);
    }

    public function getLabelsCaratulaValor()
    {
        $this->__load();
        return parent::getLabelsCaratulaValor();
    }

    public function setCriterioDefinicion(\Xtending\EntityBundle\Entity\CriterioDefinicion $criterioDefinicion = NULL)
    {
        $this->__load();
        return parent::setCriterioDefinicion($criterioDefinicion);
    }

    public function getCriterioDefinicion()
    {
        $this->__load();
        return parent::getCriterioDefinicion();
    }

    public function setEmpresa(\Xtending\EntityBundle\Entity\Entidades $empresa = NULL)
    {
        $this->__load();
        return parent::setEmpresa($empresa);
    }

    public function getEmpresa()
    {
        $this->__load();
        return parent::getEmpresa();
    }

    public function setProducto(\Xtending\EntityBundle\Entity\Producto $producto = NULL)
    {
        $this->__load();
        return parent::setProducto($producto);
    }

    public function getProducto()
    {
        $this->__load();
        return parent::getProducto();
    }

    public function setSite(\Xtending\EntityBundle\Entity\Sites $site = NULL)
    {
        $this->__load();
        return parent::setSite($site);
    }

    public function getSite()
    {
        $this->__load();
        return parent::getSite();
    }

    public function setContacto(\Xtending\EntityBundle\Entity\Contactos $contacto = NULL)
    {
        $this->__load();
        return parent::setContacto($contacto);
    }

    public function getContacto()
    {
        $this->__load();
        return parent::getContacto();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'labelsCaratulaValor', 'criterioDefinicion', 'empresa', 'producto', 'site', 'contacto');
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