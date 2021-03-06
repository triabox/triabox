<?php

namespace Proxies\__CG__\Xtending\EntityBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class FormularioConfiguracion extends \Xtending\EntityBundle\Entity\FormularioConfiguracion implements \Doctrine\ORM\Proxy\Proxy
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

    public function setListadoInformePdf($listadoInformePdf)
    {
        $this->__load();
        return parent::setListadoInformePdf($listadoInformePdf);
    }

    public function getListadoInformePdf()
    {
        $this->__load();
        return parent::getListadoInformePdf();
    }

    public function setListadoInformeExcel($listadoInformeExcel)
    {
        $this->__load();
        return parent::setListadoInformeExcel($listadoInformeExcel);
    }

    public function getListadoInformeExcel()
    {
        $this->__load();
        return parent::getListadoInformeExcel();
    }

    public function setListadoCodigo($listadoCodigo)
    {
        $this->__load();
        return parent::setListadoCodigo($listadoCodigo);
    }

    public function setListadoEmpresa($listadoEmpresa)
    {
        $this->__load();
        return parent::setListadoEmpresa($listadoEmpresa);
    }

    public function getListadoEmpresa()
    {
        $this->__load();
        return parent::getListadoEmpresa();
    }

    public function setListadoAutor($listadoAutor)
    {
        $this->__load();
        return parent::setListadoAutor($listadoAutor);
    }

    public function getListadoAutor()
    {
        $this->__load();
        return parent::getListadoAutor();
    }

    public function setListadoContacto($listadoContacto)
    {
        $this->__load();
        return parent::setListadoContacto($listadoContacto);
    }

    public function getListadoContacto()
    {
        $this->__load();
        return parent::getListadoContacto();
    }

    public function setListadoFechaAutomatica($listadoFechaAutomatica)
    {
        $this->__load();
        return parent::setListadoFechaAutomatica($listadoFechaAutomatica);
    }

    public function getListadoFechaAutomatica()
    {
        $this->__load();
        return parent::getListadoFechaAutomatica();
    }

    public function getListadoCodigo()
    {
        $this->__load();
        return parent::getListadoCodigo();
    }

    public function setListadoSite($listadoSite)
    {
        $this->__load();
        return parent::setListadoSite($listadoSite);
    }

    public function getListadoSite()
    {
        $this->__load();
        return parent::getListadoSite();
    }

    public function setListadoFechaManual($listadoFechaManual)
    {
        $this->__load();
        return parent::setListadoFechaManual($listadoFechaManual);
    }

    public function getListadoFechaManual()
    {
        $this->__load();
        return parent::getListadoFechaManual();
    }

    public function setListadoNombre($listadoNombre)
    {
        $this->__load();
        return parent::setListadoNombre($listadoNombre);
    }

    public function getListadoNombre()
    {
        $this->__load();
        return parent::getListadoNombre();
    }

    public function setListadoEstado($listadoEstado)
    {
        $this->__load();
        return parent::setListadoEstado($listadoEstado);
    }

    public function getListadoEstado()
    {
        $this->__load();
        return parent::getListadoEstado();
    }

    public function setFiltroPais($filtroPais)
    {
        $this->__load();
        return parent::setFiltroPais($filtroPais);
    }

    public function getFiltroPais()
    {
        $this->__load();
        return parent::getFiltroPais();
    }

    public function setFiltroEstado($filtroEstado)
    {
        $this->__load();
        return parent::setFiltroEstado($filtroEstado);
    }

    public function getFiltroEstado()
    {
        $this->__load();
        return parent::getFiltroEstado();
    }

    public function setFiltroCodigo($filtroCodigo)
    {
        $this->__load();
        return parent::setFiltroCodigo($filtroCodigo);
    }

    public function getFiltroCodigo()
    {
        $this->__load();
        return parent::getFiltroCodigo();
    }

    public function setFiltroEmpresa($filtroEmpresa)
    {
        $this->__load();
        return parent::setFiltroEmpresa($filtroEmpresa);
    }

    public function getFiltroEmpresa()
    {
        $this->__load();
        return parent::getFiltroEmpresa();
    }

    public function setFiltroAutor($filtroAutor)
    {
        $this->__load();
        return parent::setFiltroAutor($filtroAutor);
    }

    public function getFiltroAutor()
    {
        $this->__load();
        return parent::getFiltroAutor();
    }

    public function setFiltroContacto($filtroContacto)
    {
        $this->__load();
        return parent::setFiltroContacto($filtroContacto);
    }

    public function getFiltroContacto()
    {
        $this->__load();
        return parent::getFiltroContacto();
    }

    public function setFiltroSite($filtroSite)
    {
        $this->__load();
        return parent::setFiltroSite($filtroSite);
    }

    public function getFiltroSite()
    {
        $this->__load();
        return parent::getFiltroSite();
    }

    public function setFiltroFechaDesdeHasta($filtroFechaDesdeHasta)
    {
        $this->__load();
        return parent::setFiltroFechaDesdeHasta($filtroFechaDesdeHasta);
    }

    public function getFiltroFechaDesdeHasta()
    {
        $this->__load();
        return parent::getFiltroFechaDesdeHasta();
    }

    public function setFormularioDefincion(\Xtending\EntityBundle\Entity\FormulariosDefiniciones $formularioDefincion)
    {
        $this->__load();
        return parent::setFormularioDefincion($formularioDefincion);
    }

    public function getFormularioDefincion()
    {
        $this->__load();
        return parent::getFormularioDefincion();
    }

    public function setTieneDatosTemplate($valor)
    {
        $this->__load();
        return parent::setTieneDatosTemplate($valor);
    }

    public function getTieneDatosTemplate()
    {
        $this->__load();
        return parent::getTieneDatosTemplate();
    }

    public function setTienePresentacion($valor)
    {
        $this->__load();
        return parent::setTienePresentacion($valor);
    }

    public function getTienePresentacion()
    {
        $this->__load();
        return parent::getTienePresentacion();
    }

    public function setTieneDocTexto($valor)
    {
        $this->__load();
        return parent::setTieneDocTexto($valor);
    }

    public function getTieneDocTexto()
    {
        $this->__load();
        return parent::getTieneDocTexto();
    }

    public function setDocTexto($docTexto)
    {
        $this->__load();
        return parent::setDocTexto($docTexto);
    }

    public function getDocTexto()
    {
        $this->__load();
        return parent::getDocTexto();
    }

    public function setPresentacion($presentacion)
    {
        $this->__load();
        return parent::setPresentacion($presentacion);
    }

    public function getPresentacion()
    {
        $this->__load();
        return parent::getPresentacion();
    }

    public function setDatoTemplate($dato)
    {
        $this->__load();
        return parent::setDatoTemplate($dato);
    }

    public function getDatoTemplate()
    {
        $this->__load();
        return parent::getDatoTemplate();
    }

    public function getFilePresentacion()
    {
        $this->__load();
        return parent::getFilePresentacion();
    }

    public function getFileDocTexto()
    {
        $this->__load();
        return parent::getFileDocTexto();
    }

    public function getFileDatoTemplate()
    {
        $this->__load();
        return parent::getFileDatoTemplate();
    }

    public function getAbsolutePathPresentacion()
    {
        $this->__load();
        return parent::getAbsolutePathPresentacion();
    }

    public function getAbsolutePathDocTexto()
    {
        $this->__load();
        return parent::getAbsolutePathDocTexto();
    }

    public function getAbsolutePathDatoTemplate()
    {
        $this->__load();
        return parent::getAbsolutePathDatoTemplate();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function getWebPathDocTexto()
    {
        $this->__load();
        return parent::getWebPathDocTexto();
    }

    public function getWebPathDatoTemplate()
    {
        $this->__load();
        return parent::getWebPathDatoTemplate();
    }

    public function setFilePresentacion(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFilePresentacion($file);
    }

    public function setFileDocTexto(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFileDocTexto($file);
    }

    public function setFileDatoTemplate(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFileDatoTemplate($file);
    }

    public function upload($file, $ubicacion)
    {
        $this->__load();
        return parent::upload($file, $ubicacion);
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'filtroFechaDesdeHasta', 'filtroSite', 'filtroContacto', 'filtroAutor', 'filtroEmpresa', 'filtroCodigo', 'filtroEstado', 'filtroPais', 'listadoEstado', 'listadoCodigo', 'listadoNombre', 'listadoFechaManual', 'listadoSite', 'listadoFechaAutomatica', 'listadoContacto', 'listadoAutor', 'listadoEmpresa', 'listadoInformePdf', 'listadoInformeExcel', 'tieneDocTexto', 'tienePresentacion', 'tieneDatosTemplate', 'docTexto', 'presentacion', 'datoTemplate', 'formularioDefincion');
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