<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleModels Entity.
 */
class VehicleModel extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'vehicle_type_id' => true,
        'name' => true,
        'desc' => true,
        'vehicle_type' => true,
        'client_devices' => true,
    ];
}
