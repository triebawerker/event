<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReservationSpec extends ObjectBehavior
{

    public function it_is_initializable()
    {
        $this->shouldHaveType('Reservation');
    }

    public function it_has_an_approval() {
        $this->getStatus()->shouldBeEqualTo("unapproved");
    }
}
