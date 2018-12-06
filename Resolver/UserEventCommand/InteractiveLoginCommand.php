<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Resolver\UserEventCommand;

use Xiidea\EasyAuditBundle\Common\UserAwareComponent;

class InteractiveLoginCommand extends UserLoginCommand
{
    /**
     * @var UserAwareComponent
     */
    private $userAwareComponent;

    public function __construct(UserAwareComponent $userAwareComponent)
    {
        $this->userAwareComponent = $userAwareComponent;
    }

    /**
     * @param $event
     *
     * @return mixed
     */
    public function resolve($event)
    {
        return $this->getEventDetailsArray($this->userAwareComponent->getUsername());
    }
}
