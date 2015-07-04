<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientNotification Entity.
 */
class ClientNotification extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'notifications' => true,
        'notification_type_id' => true,
        'pulled' => true,
        'client_info' => true,
        'notification_type' => true,
    ];
}
