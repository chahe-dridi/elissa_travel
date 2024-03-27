<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \App\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'NomEvent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'AdresseEvent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'nbrticketsdispo', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'datedebutEvent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'datefinevent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'prixentre', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'imageevent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'TypeEvenement', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'User', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'reservationEvents'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'NomEvent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'AdresseEvent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'nbrticketsdispo', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'datedebutEvent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'datefinevent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'prixentre', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'imageevent', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'TypeEvenement', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'User', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'reservationEvents'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
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
    public function getNomEvent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEvent', []);

        return parent::getNomEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEvent(string $NomEvent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEvent', [$NomEvent]);

        return parent::setNomEvent($NomEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseEvent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseEvent', []);

        return parent::getAdresseEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseEvent(string $AdresseEvent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseEvent', [$AdresseEvent]);

        return parent::setAdresseEvent($AdresseEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrticketsdispo(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrticketsdispo', []);

        return parent::getNbrticketsdispo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrticketsdispo(int $nbrticketsdispo): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrticketsdispo', [$nbrticketsdispo]);

        return parent::setNbrticketsdispo($nbrticketsdispo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedebutEvent(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedebutEvent', []);

        return parent::getDatedebutEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatedebutEvent(\DateTimeInterface $datedebutEvent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedebutEvent', [$datedebutEvent]);

        return parent::setDatedebutEvent($datedebutEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefinevent(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefinevent', []);

        return parent::getDatefinevent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatefinevent(\DateTimeInterface $datefinevent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefinevent', [$datefinevent]);

        return parent::setDatefinevent($datefinevent);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixentre(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixentre', []);

        return parent::getPrixentre();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixentre(int $prixentre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixentre', [$prixentre]);

        return parent::setPrixentre($prixentre);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageevent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageevent', []);

        return parent::getImageevent();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageevent(string $imageevent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageevent', [$imageevent]);

        return parent::setImageevent($imageevent);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeEvenement(): ?\App\Entity\TypeEvenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeEvenement', []);

        return parent::getTypeEvenement();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeEvenement(?\App\Entity\TypeEvenement $TypeEvenement): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeEvenement', [$TypeEvenement]);

        return parent::setTypeEvenement($TypeEvenement);
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
    public function setUser(?\App\Entity\User $User): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$User]);

        return parent::setUser($User);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservationEvents(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservationEvents', []);

        return parent::getReservationEvents();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservationEvent(\App\Entity\ReservationEvent $reservationEvent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservationEvent', [$reservationEvent]);

        return parent::addReservationEvent($reservationEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservationEvent(\App\Entity\ReservationEvent $reservationEvent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservationEvent', [$reservationEvent]);

        return parent::removeReservationEvent($reservationEvent);
    }

}
