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

    function it_should_invoke_the_subscribed_listener($event)
    {
        $event = new \ReservationCreatedEvent();

        $this->on(
            "ReservationCreatedEvent",
            $callable = function () {
                return "ABC";
            }
        );
        $this->emit($event)->shouldBeEqualTo("ABC");

    }
}
