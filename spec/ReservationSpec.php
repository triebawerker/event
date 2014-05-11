<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReservationSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Reservation');
    }
}
