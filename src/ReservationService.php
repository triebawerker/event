<?php

class ReservationService
{

    /** @var  Reservation $reservation */
    private $reservation;

    /** @var  EventDispatcher $eventDispatcher */
    private $eventDispatcher;

    public function __construct(EventDispatcher $eventDispatcher) {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @return $this
     */
    public function createReservation()
    {
        $this->reservation = new Reservation();
        $this->getEventDispatcher()->emit(new ReservationCreatedEvent());

        return $this;
    }

    /**
     * @return Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @return EventDispatcher
     */
    public function getEventDispatcher()
    {
        return $this->eventDispatcher;
    }
}
