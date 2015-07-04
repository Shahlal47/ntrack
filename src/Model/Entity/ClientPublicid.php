<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientPublicid Entity.
 */
class ClientPublicid extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'publicid' => true,
        'client_info_id' => true,
        'client_device_id' => true,
        'client_info' => true,
        'client_device' => true,
    ];
}
