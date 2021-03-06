<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AlertType Entity.
 */
class AlertType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'msg_code' => true,
        'client_alert_settings' => true,
        'device_alerts' => true,
    ];
}
