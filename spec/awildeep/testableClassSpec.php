<?php

namespace spec\awildeep;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class testableClassSpec extends ObjectBehavior
{
    function it_should_add_two_numbers()
    {
        $this->add(15, 25)->shouldBe(40);
    }


}
