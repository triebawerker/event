<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReservationSpec extends ObjectBehavior
{
    function let($eventDispatcher)
    {
        $eventDispatcher->beADoubleOf('EventDispatcher');
        $this->beConstructedWith($eventDispatcher);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Reservation');
    }
}
