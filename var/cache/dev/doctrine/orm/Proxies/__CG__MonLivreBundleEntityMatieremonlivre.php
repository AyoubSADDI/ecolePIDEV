<?php

namespace Proxies\__CG__\MonLivreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Matieremonlivre extends \MonLivreBundle\Entity\Matieremonlivre implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = ['nomfile' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->nomfile);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'id', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'matiere', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'nbheure', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'Categorie', 'file', 'nomfile'];
        }

        return ['__isInitialized__', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'id', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'matiere', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'nbheure', '' . "\0" . 'MonLivreBundle\\Entity\\Matieremonlivre' . "\0" . 'Categorie', 'file'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Matieremonlivre $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->nomfile);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getWebpath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebpath', []);

        return parent::getWebpath();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadFile', []);

        return parent::getUploadFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatiere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', []);

        return parent::getMatiere();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatiere($matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatiere', [$matiere]);

        return parent::setMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbheure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbheure', []);

        return parent::getNbheure();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbheure($nbheure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbheure', [$nbheure]);

        return parent::setNbheure($nbheure);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie($Categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$Categorie]);

        return parent::setCategorie($Categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomfile', []);

        return parent::getNomfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomfile($nomfile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomfile', [$nomfile]);

        return parent::setNomfile($nomfile);
    }

}