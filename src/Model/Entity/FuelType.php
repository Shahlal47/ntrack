<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuelType Entity.
 */
class FuelType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'client_vehicles' => true,
    ];
}
