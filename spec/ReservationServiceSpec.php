<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class ReservationServiceSpec extends ObjectBehavior
{
    function it_is_initializable() {
        $this->shouldHaveType('ReservationService');
    }

    function it_should_create_a_reservation() {
        $this->createReservation()->shouldHaveType('Reservation');
    }
}
