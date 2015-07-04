<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientDeviceSubscription Entity.
 */
class ClientDeviceSubscription extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'subscribe_date' => true,
        'expire_date' => true,
        'active' => true,
        'account_type_id' => true,
        'client_deviceid' => true,
        'client_info' => true,
        'account_type' => true,
        'client_devices' => true,
    ];
}
