<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class ReservationServiceSpec extends ObjectBehavior
{
    function let($eventDispatcher)
    {
        $eventDispatcher->beADoubleOf('EventDispatcher');
        $this->beConstructedWith($eventDispatcher);
    }

    function it_is_initializable() {
        $this->shouldHaveType('ReservationService');
    }

    function it_should_create_a_reservation() {
        $this->createReservation();
        $this->getReservation()->shouldHaveType('Reservation');
    }

    function it_should_emit_an_ReservationCreatedEvent($eventDispatcher) {
        $this->createReservation();

        $eventDispatcher->emit(new \ReservationCreatedEvent())->shouldBeCalled();
    }
}
