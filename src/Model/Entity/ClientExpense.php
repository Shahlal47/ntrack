<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientExpense Entity.
 */
class ClientExpense extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'expense_type_id' => true,
        'client_device_id' => true,
        'ondate' => true,
        'amount' => true,
        'comments' => true,
        'client_contact_id' => true,
        'client_info' => true,
        'expense_type' => true,
        'client_device' => true,
        'client_contact' => true,
    ];
}
