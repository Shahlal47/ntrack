<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeviceType Entity.
 */
class DeviceType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'client_devices' => true,
        'device_infos' => true,
    ];
}
