<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\SettingsBundle\Model;

use PhpSpec\ObjectBehavior;
use Sylius\Bundle\SettingsBundle\Model\ParameterInterface;
use Sylius\Bundle\SettingsBundle\Model\SettingInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class ParameterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\SettingsBundle\Model\Parameter');
    }

    function it_should_be_a_Sylius_settings_parameter()
    {
        $this->shouldImplement(ParameterInterface::class);
    }

    function it_should_not_have_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_should_be_unnamed_by_default()
    {
        $this->getName()->shouldReturn(null);
    }

    function its_setting_is_mutable(SettingInterface $setting)
    {
        $this->setSetting($setting);
        $this->getSetting()->shouldReturn($setting);
    }

    function its_name_should_be_mutable()
    {
        $this->setName('siteTitle');
        $this->getName()->shouldReturn('siteTitle');
    }

    function it_should_not_have_value_by_default()
    {
        $this->getValue()->shouldReturn(null);
    }

    function its_value_should_be_mutable()
    {
        $this->setValue(true);
        $this->getValue()->shouldReturn(true);
    }
}
