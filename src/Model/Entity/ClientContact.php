<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientContact Entity.
 */
class ClientContact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'client_info_id' => true,
        'mobile' => true,
        'email' => true,
        'name' => true,
        'nationalid' => true,
        'user_id' => true,
        'phone' => true,
        'fax' => true,
        'mobile_home' => true,
        'mobile_office' => true,
        'client_infos' => true,
        'users' => true,
        'client_alert_settings' => true,
        'client_contact_devices' => true,
        'client_device_geofences' => true,
        'client_driver_assignments' => true,
        'client_drivers' => true,
        'client_expenses' => true,
        'client_trip_paths' => true,
        'client_vehicle_assignments' => true,
        'geofences' => true,
    ];
}
