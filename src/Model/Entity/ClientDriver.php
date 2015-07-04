<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientDriver Entity.
 */
class ClientDriver extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'driving_license' => true,
        'address' => true,
        'mobile' => true,
        'join_date' => true,
        'client_info_id' => true,
        'client_contact_id' => true,
        'client_info' => true,
        'client_contact' => true,
        'client_driver_assignments' => true,
    ];
}
