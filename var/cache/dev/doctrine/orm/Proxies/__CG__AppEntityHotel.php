<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Hotel extends \App\Entity\Hotel implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nomHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'lieu', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'telHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'discHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'etatHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nbChambre', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'chambres', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'reservationHotels', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'User', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'image'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nomHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'lieu', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'telHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'discHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'etatHotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nbChambre', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'chambres', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'reservationHotels', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'User', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Hotel $proxy) {
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
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
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
    public function getNomHotel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomHotel', []);

        return parent::getNomHotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomHotel(string $nomHotel): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomHotel', [$nomHotel]);

        return parent::setNomHotel($nomHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', []);

        return parent::getLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu(string $lieu): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', [$lieu]);

        return parent::setLieu($lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelHotel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelHotel', []);

        return parent::getTelHotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelHotel(string $telHotel): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelHotel', [$telHotel]);

        return parent::setTelHotel($telHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscHotel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscHotel', []);

        return parent::getDiscHotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscHotel(string $discHotel): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscHotel', [$discHotel]);

        return parent::setDiscHotel($discHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatHotel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatHotel', []);

        return parent::getEtatHotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatHotel(string $etatHotel): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatHotel', [$etatHotel]);

        return parent::setEtatHotel($etatHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbChambre(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbChambre', []);

        return parent::getNbChambre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbChambre(int $nbChambre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbChambre', [$nbChambre]);

        return parent::setNbChambre($nbChambre);
    }

    /**
     * {@inheritDoc}
     */
    public function getChambres(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChambres', []);

        return parent::getChambres();
    }

    /**
     * {@inheritDoc}
     */
    public function addChambre(\App\Entity\Chambre $chambre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChambre', [$chambre]);

        return parent::addChambre($chambre);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChambre(\App\Entity\Chambre $chambre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChambre', [$chambre]);

        return parent::removeChambre($chambre);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservationHotels(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservationHotels', []);

        return parent::getReservationHotels();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservationHotel(\App\Entity\ReservationHotel $reservationHotel): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservationHotel', [$reservationHotel]);

        return parent::addReservationHotel($reservationHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservationHotel(\App\Entity\ReservationHotel $reservationHotel): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservationHotel', [$reservationHotel]);

        return parent::removeReservationHotel($reservationHotel);
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

}