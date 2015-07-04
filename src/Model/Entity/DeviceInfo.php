<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeviceInfo Entity.
 */
class DeviceInfo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'device_type_id' => true,
        'brand' => true,
        'sensors' => true,
        'device_type' => true,
        'client_devices' => true,
    ];
}
