<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountType Entity.
 */
class AccountType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'months' => true,
        'client_device_subscriptions' => true,
    ];
}
