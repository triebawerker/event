<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class BrokerSpec extends ObjectBehavior
{

    function let($eventDispatcher, $pspService) {
        $eventDispatcher->beADoubleOf('EventDispatcher');
        $pspService->beADoubleOf('PspService');
        $this->beConstructedWith($eventDispatcher, $pspService);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Broker');
    }

    public function it_should_have_a_PspService() {
        $this->getPspService()->shouldHaveType('PspService');
    }
}
