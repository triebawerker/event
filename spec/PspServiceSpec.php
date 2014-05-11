<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class PspServiceSpec extends ObjectBehavior
{
    public function it_is_initializable() {
        $this->shouldHaveType('PspService');
    }

    public function it_should_make_an_approval() {
        $this->approve()->shouldBe("success");
    }
}
