<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserLog Entity.
 */
class UserLog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'user_type_id' => true,
        'user' => true,
        'user_type' => true,
    ];
}
