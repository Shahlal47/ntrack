<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeviceAlert Entity.
 */
class DeviceAlert extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'deviceid' => true,
        'alert_type_id' => true,
        'pulled' => true,
        'received_at' => true,
        'lat' => true,
        'lng' => true,
        'alert_type' => true,
    ];
}
