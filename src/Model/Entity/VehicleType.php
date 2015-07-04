<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleType Entity.
 */
class VehicleType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'def_speed_limit' => true,
        'def_min_mileage' => true,
        'def_man_mileage' => true,
        'def_fuel_consumption' => true,
        'client_devices' => true,
        'client_vehicles' => true,
        'vehicle_model' => true,
    ];
}
