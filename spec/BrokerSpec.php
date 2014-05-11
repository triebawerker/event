<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class BrokerSpec extends ObjectBehavior
{

    function let($eventDispatcher) {
        $eventDispatcher->beADoubleOf('EventDispatcher');
        $this->beConstructedWith($eventDispatcher);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Broker');
    }
}
