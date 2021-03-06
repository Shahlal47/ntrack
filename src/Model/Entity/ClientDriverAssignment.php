<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class ClientDriverAssignment extends Entity
{
    protected $_accessible = [
        'client_info_id' => true,
        'client_driver_id' => true,
        'client_vehicle_id' => true,
        'from' => true,
        'to' => true,
        'client_contact_id' => true,
        'client_info' => true,
        'client_driver' => true,
        'client_vehicle' => true,
        'client_contact' => true,
    ];
}
