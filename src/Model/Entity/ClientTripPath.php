<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientTripPath Entity.
 */
class ClientTripPath extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'client_contact_id' => true,
        'trip_path' => true,
        'active' => true,
        'client_info' => true,
        'client_contact' => true,
    ];
}
