<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientVehicleAssignment Entity.
 */
class ClientVehicleAssignment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'client_vehicle_id' => true,
        'client_trip_id' => true,
        'assignment_date' => true,
        'start_time' => true,
        'finish_time' => true,
        'client_contact_id' => true,
        'client_info' => true,
        'client_vehicle' => true,
        'client_trip' => true,
        'client_contact' => true,
    ];
}
