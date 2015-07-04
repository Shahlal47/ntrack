<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientReport Entity.
 */
class ClientReport extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'reports' => true,
        'client_info' => true,
    ];
}
