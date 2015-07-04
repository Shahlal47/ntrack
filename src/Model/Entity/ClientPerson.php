<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientPerson Entity.
 */
class ClientPerson extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_device_id' => true,
        'client_info_id' => true,
        'name' => true,
        'mobile' => true,
        'image' => true,
        'identification_type_id' => true,
        'identification_number' => true,
        'active' => true,
        'client_device' => true,
        'client_info' => true,
        'identification_type' => true,
    ];
}
