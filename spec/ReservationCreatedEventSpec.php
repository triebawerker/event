<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReservationCreatedEventSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('ReservationCreatedEvent');
    }

    function it_derives_from_event()
    {
        $this->shouldHaveType('Event');
    }
}
