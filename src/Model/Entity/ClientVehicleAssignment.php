<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class ClientVehicleAssignment extends Entity
{
    protected $_accessible = [
        'client_info_id' => true,
        'client_contact_id' => true,
        'client_vehicle_id' => true,
        'client_trip_path_id' => true,
        'assignment_date' => true,
        'start_time' => true,
        'finish_time' => true,
        'created_by' => true,
        'modified_by' => true,
        'client_info' => true,
        'client_contact' => true,
        'client_vehicle' => true,
        'client_trip_path' => true,
    ];
}
