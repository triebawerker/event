<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventDispatcherSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('EventDispatcher');
    }

//    function it_implements_event_handling()
//    {
//        $this->shouldImplement('PublisherInterface');
//        $this->shouldImplement('SubscriberInterface');
//    }

    function it_should_invoke_the_subscribed_listener(\PspService $pspService)
    {
        $event = new \ReservationCreatedEvent();
        $pspService->approve()->willReturn("success");

        $callable = function ($pspService) {
            return $pspService->approve();
        };

        $this->on(
            "ReservationCreatedEvent",
            $callable,
            $pspService
        );
        $this->emit($event)->shouldBeEqualTo("success");

    }
}
