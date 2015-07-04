<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientVehicle Entity.
 */
class ClientVehicle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'registrtion_number' => true,
        'vehicle_model' => true,
        'vehicle_color' => true,
        'speed_limit' => true,
        'fuel_tank_size' => true,
        'fuel_type_id' => true,
        'vehicle_type_id' => true,
        'registration_expire_date' => true,
        'client_info_id' => true,
        'client_device_id' => true,
        'minimum_mileage' => true,
        'maintenance_mileage' => true,
        'fuel_consumption' => true,
        'comments' => true,
        'fuel_type' => true,
        'vehicle_type' => true,
        'client_info' => true,
        'client_device' => true,
        'client_driver_assignments' => true,
        'client_vehicle_assignments' => true,
    ];
}
