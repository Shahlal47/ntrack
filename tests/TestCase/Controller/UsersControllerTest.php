<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.user_types',
        'app.client_contacts',
        'app.client_infos',
        'app.client_types',
        'app.company_types',
        'app.client_alert_settings',
        'app.alert_types',
        'app.device_alerts',
        'app.client_devices',
        'app.device_infos',
        'app.device_types',
        'app.vehicle_types',
        'app.client_device_subscriptions',
        'app.account_types',
        'app.trackers',
        'app.vehicle_models',
        'app.client_contact_devices',
        'app.client_device_geofences',
        'app.geofences',
        'app.geofence_types',
        'app.client_expenses',
        'app.expense_types',
        'app.client_persons',
        'app.identification_types',
        'app.client_publicids',
        'app.client_vehicles',
        'app.fuel_types',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_vehicle_assignments',
        'app.client_trips',
        'app.client_notifications',
        'app.notification_types',
        'app.client_reports',
        'app.client_trip_paths',
        'app.user_logs'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
