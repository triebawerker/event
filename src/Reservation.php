<?php

class Reservation
{

    public function complete()
    {
        $this->eventDispatcher->emit(new ReservationCreatedEvent());
    }
}
