<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SystemInfo Entity.
 */
class SystemInfo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'device_seq_start' => true,
        'device_seq_last' => true,
    ];
}
