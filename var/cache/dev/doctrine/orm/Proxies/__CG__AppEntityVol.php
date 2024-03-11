<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vol extends \App\Entity\Vol implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'compagnie_aerienne', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'heure_depart', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'heure_arrive', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'disponible', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'airport_depart', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'airport_arrive', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'volclass', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'reservations'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'compagnie_aerienne', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'heure_depart', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'heure_arrive', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'disponible', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'airport_depart', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'airport_arrive', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'volclass', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Vol' . "\0" . 'reservations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vol $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getCompagnieAerienne(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompagnieAerienne', []);

        return parent::getCompagnieAerienne();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompagnieAerienne(string $compagnie_aerienne): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompagnieAerienne', [$compagnie_aerienne]);

        return parent::setCompagnieAerienne($compagnie_aerienne);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureDepart(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureDepart', []);

        return parent::getHeureDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureDepart(\DateTimeInterface $heure_depart): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureDepart', [$heure_depart]);

        return parent::setHeureDepart($heure_depart);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureArrive(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureArrive', []);

        return parent::getHeureArrive();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureArrive(\DateTimeInterface $heure_arrive): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureArrive', [$heure_arrive]);

        return parent::setHeureArrive($heure_arrive);
    }

    /**
     * {@inheritDoc}
     */
    public function isDisponible(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDisponible', []);

        return parent::isDisponible();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponible(bool $disponible): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponible', [$disponible]);

        return parent::setDisponible($disponible);
    }

    /**
     * {@inheritDoc}
     */
    public function getairportDepart(): ?\App\Entity\Airport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getairportDepart', []);

        return parent::getairportDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setairportDepart(?\App\Entity\Airport $airport_depart): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setairportDepart', [$airport_depart]);

        return parent::setairportDepart($airport_depart);
    }

    /**
     * {@inheritDoc}
     */
    public function getairportarrive(): ?\App\Entity\Airport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getairportarrive', []);

        return parent::getairportarrive();
    }

    /**
     * {@inheritDoc}
     */
    public function setairportarrive(?\App\Entity\Airport $airport_arrive): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setairportarrive', [$airport_arrive]);

        return parent::setairportarrive($airport_arrive);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolclass(): ?\App\Entity\Volclass
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolclass', []);

        return parent::getVolclass();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolclass(?\App\Entity\Volclass $volclass): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolclass', [$volclass]);

        return parent::setVolclass($volclass);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}