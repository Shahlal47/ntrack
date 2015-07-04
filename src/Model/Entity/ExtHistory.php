<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtHistory Entity.
 */
class ExtHistory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'memo_number' => true,
        'ref_number' => true,
        'from_date' => true,
        'to_date' => true,
        'client_device_subscriptions_id' => true,
        'client_device_subscription' => true,
    ];
}
