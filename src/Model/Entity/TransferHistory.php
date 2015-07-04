<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TransferHistory Entity.
 */
class TransferHistory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'from_user_id' => true,
        'from_client_info_id' => true,
        'to_user_id' => true,
        'to_client_info_id' => true,
        'from_veh_reg_no' => true,
        'to_veh_reg_no' => true,
        'device_id' => true,
        'transfered_by_id' => true,
        'from_user' => true,
        'from_client_info' => true,
        'to_user' => true,
        'to_client_info' => true,
        'device' => true,
        'transfered_by' => true,
    ];
}
