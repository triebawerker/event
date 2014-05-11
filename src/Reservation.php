<?php

class Reservation
{
    /**
     * @var EventDispatcher
     */
    private $eventDispatcher;

    public function __construct($eventDispatcher) {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function complete()
    {
        $this->eventDispatcher->emit(new ReservationCreatedEvent());
    }
}
