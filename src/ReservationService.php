<?php

class ReservationService
{

    public function createReservation()
    {
        return new Reservation(new EventDispatcher());
    }
}
