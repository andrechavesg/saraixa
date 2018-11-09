<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Funcionario extends \App\Entity\Funcionario implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'nome', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'dataDeNascimento', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'dataDeEntrada', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'projeto', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'horasLancadas'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'nome', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'dataDeNascimento', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'dataDeEntrada', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'projeto', '' . "\0" . 'App\\Entity\\Funcionario' . "\0" . 'horasLancadas'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Funcionario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

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
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', []);

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', [$nome]);

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataDeNascimento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataDeNascimento', []);

        return parent::getDataDeNascimento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataDeNascimento($dataDeNascimento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataDeNascimento', [$dataDeNascimento]);

        return parent::setDataDeNascimento($dataDeNascimento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataDeEntrada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataDeEntrada', []);

        return parent::getDataDeEntrada();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataDeEntrada($dataDeEntrada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataDeEntrada', [$dataDeEntrada]);

        return parent::setDataDeEntrada($dataDeEntrada);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjeto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjeto', []);

        return parent::getProjeto();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjeto($projeto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjeto', [$projeto]);

        return parent::setProjeto($projeto);
    }

    /**
     * {@inheritDoc}
     */
    public function getHorasLancadas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHorasLancadas', []);

        return parent::getHorasLancadas();
    }

    /**
     * {@inheritDoc}
     */
    public function setHorasLancadas($horasLancadas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHorasLancadas', [$horasLancadas]);

        return parent::setHorasLancadas($horasLancadas);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempoNaEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempoNaEmpresa', []);

        return parent::getTempoNaEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
