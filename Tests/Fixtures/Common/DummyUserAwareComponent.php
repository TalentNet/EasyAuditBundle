<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Tests\Fixtures\Common;

use Xiidea\EasyAuditBundle\Common\UserAwareComponent;

class DummyUserAwareComponent extends UserAwareComponent
{
    public function getImpersonatingUserForTest()
    {
        return $this->getImpersonatingUser();
    }
}
