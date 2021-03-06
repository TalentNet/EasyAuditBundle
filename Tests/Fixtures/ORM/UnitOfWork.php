<?php

namespace Xiidea\EasyAuditBundle\Tests\Fixtures\ORM;

use Doctrine\Persistence\PropertyChangedListener;

class UnitOfWork implements PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object $sender       the object on which the property changed
     * @param string $propertyName the name of the property that changed
     * @param mixed  $oldValue     the old value of the property that changed
     * @param mixed  $newValue     the new value of the property that changed
     */
    public function propertyChanged($sender, $propertyName, $oldValue, $newValue)
    {
    }

    public function getEntityChangeSet()
    {
    }
}
