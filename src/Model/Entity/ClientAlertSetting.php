<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class ClientAlertSetting extends Entity
{
    protected $_accessible = [
        'client_info_id' => true,
        'alert_type_id' => true,
        'client_contact_id' => true,
        'client_device_id' => true,
        'is_sms' => true,
        'is_email' => true,
        'client_info' => true,
        'alert_type' => true,
        'client_contact' => true,
        'client_device' => true,
    ];
}
