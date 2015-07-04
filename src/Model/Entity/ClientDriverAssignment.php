<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientDriverAssignment Entity.
 */
class ClientDriverAssignment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
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
