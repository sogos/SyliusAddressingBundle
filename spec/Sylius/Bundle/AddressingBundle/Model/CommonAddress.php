<?php

namespace spec\Sylius\Bundle\AddressingBundle\Model;

use PHPSpec2\ObjectBehavior;

/**
 * Common address model spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class CommonAddress extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\AddressingBundle\Model\CommonAddress');

    }

    function it_should_be_sylius_common_address()
    {
        $this->shouldImplement('Sylius\Bundle\AddressingBundle\Model\CommonAddressInterface');
    }
}