<?php

class Broker
{
    /**
     * @var EventDispatcher
     */
    private $eventDispatcher;

    public function __construct($eventDispatcher) {
        $this->eventDispatcher = $eventDispatcher;
        $this->eventDispatcher->on(
            "ReservationCreatedEvent",
            function () {
                return "Reservation created";
            }
        );
    }


}
