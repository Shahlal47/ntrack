<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientDevice Entity.
 */
class ClientDevice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'deviceid' => true,
        'active' => true,
        'imei' => true,
        'mob_no' => true,
        'speed_limit' => true,
        'minimum_mileage' => true,
        'maintenance_mileage' => true,
        'fuel_consumption' => true,
        'comments' => true,
        'device_info_id' => true,
        'vehicle_type_id' => true,
        'name' => true,
        'device_type_id' => true,
        'client_device_subscription_id' => true,
        'tags' => true,
        'credit_file_num' => true,
        'tracker_id' => true,
        'vehicle_model_id' => true,
        'client_info' => true,
        'device_info' => true,
        'vehicle_type' => true,
        'device_type' => true,
        'client_device_subscription' => true,
        'vehicle_model' => true,
        'client_alert_settings' => true,
        'client_contact_devices' => true,
        'client_device_geofences' => true,
        'client_expenses' => true,
        'client_persons' => true,
        'client_publicids' => true,
        'client_vehicles' => true,
    ];
}
