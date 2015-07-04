<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Geofence Entity.
 */
class Geofence extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'geofence_type_id' => true,
        'geofence_points' => true,
        'geo_shape' => true,
        'name' => true,
        'color' => true,
        'client_info_id' => true,
        'client_contact_id' => true,
        'geofence_type' => true,
        'client_info' => true,
        'client_contact' => true,
    ];
}
