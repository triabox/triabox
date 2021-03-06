<?php

namespace Proxies\__CG__\Xtending\EntityBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class LabelCaratulaValor extends \Xtending\EntityBundle\Entity\LabelCaratulaValor implements \Doctrine\ORM\Proxy\Proxy
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

    public function setValor($valor)
    {
        $this->__load();
        return parent::setValor($valor);
    }

    public function getValor()
    {
        $this->__load();
        return parent::getValor();
    }

    public function setTipoSelect(\Xtending\EntityBundle\Entity\LabelsCriterio $tipoSelect = NULL)
    {
        $this->__load();
        return parent::setTipoSelect($tipoSelect);
    }

    public function setFormularioResultado(\Xtending\EntityBundle\Entity\FormulariosResultados $formularioResultado = NULL)
    {
        $this->__load();
        return parent::setFormularioResultado($formularioResultado);
    }

    public function addFormularioResultado(\Xtending\EntityBundle\Entity\FormulariosResultados $formularioResultado = NULL)
    {
        $this->__load();
        return parent::addFormularioResultado($formularioResultado);
    }

    public function getFormularioResultado()
    {
        $this->__load();
        return parent::getFormularioResultado();
    }

    public function addTipoSelect(\Xtending\EntityBundle\Entity\LabelsCriterio $tipoSelect = NULL)
    {
        $this->__load();
        return parent::addTipoSelect($tipoSelect);
    }

    public function getTipoSelect()
    {
        $this->__load();
        return parent::getTipoSelect();
    }

    public function setLabelCaratula(\Xtending\EntityBundle\Entity\LabelsCaratula $labelCaratula = NULL)
    {
        $this->__load();
        return parent::setLabelCaratula($labelCaratula);
    }

    public function getLabelCaratula()
    {
        $this->__load();
        return parent::getLabelCaratula();
    }

    public function setCriterioValor(\Xtending\EntityBundle\Entity\CriterioValor $criterioValor = NULL)
    {
        $this->__load();
        return parent::setCriterioValor($criterioValor);
    }

    public function addCriterioValor(\Xtending\EntityBundle\Entity\CriterioValor $criterioValor = NULL)
    {
        $this->__load();
        return parent::addCriterioValor($criterioValor);
    }

    public function getCriterioValor()
    {
        $this->__load();
        return parent::getCriterioValor();
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'valor', 'tipoSelect', 'labelCaratula', 'formularioResultado', 'criterioValor');
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