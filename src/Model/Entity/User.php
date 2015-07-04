<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'hash_change_password' => true,
        'user_type_id' => true,
        'active' => true,
        'email' => true,
        'client_contact_id' => true,
        'client_info_id' => true,
        'block_type' => true,
        'user_type' => true,
        'client_contacts' => true,
        'client_infos' => true,
        'user_logs' => true,
    ];
}
