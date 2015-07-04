<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientInfo Entity.
 */
class ClientInfo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'client_type_id' => true,
        'company_type_id' => true,
        'address' => true,
        'buyerno' => true,
        'website' => true,
        'user_id' => true,
        'client_contact_id' => true,
        'logo' => true,
        'numOfTrackers' => true,
        'numOfGeoFences' => true,
        'sensors' => true,
        'client_type' => true,
        'company_type' => true,
        'users' => true,
        'client_contacts' => true,
        'client_alert_settings' => true,
        'client_device_subscriptions' => true,
        'client_devices' => true,
        'client_driver_assignments' => true,
        'client_drivers' => true,
        'client_expenses' => true,
        'client_notifications' => true,
        'client_persons' => true,
        'client_publicids' => true,
        'client_reports' => true,
        'client_trip_paths' => true,
        'client_vehicle_assignments' => true,
        'client_vehicles' => true,
        'geofences' => true,
    ];
}
