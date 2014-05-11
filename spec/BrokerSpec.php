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

    public function it_should_have_a_PspService() {
        $this->getPspService()->shouldHaveType('PspService');
    }

    public function it_should_get_approval_for_a_new_reservation() {

    }
}
