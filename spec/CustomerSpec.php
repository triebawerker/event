<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class CustomerSpec extends ObjectBehavior
{
    public function it_is_initializable() {
        $this->shouldHaveType('Customer');
    }
}
