<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientContactDevice Entity.
 */
class ClientContactDevice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_contact_id' => true,
        'client_device_id' => true,
        'active' => true,
        'client_contact' => true,
        'client_device' => true,
    ];
}
