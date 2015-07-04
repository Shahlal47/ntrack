<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ClientPersonsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ClientPersonsController Test Case
 */
class ClientPersonsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_persons',
        'app.client_devices',
        'app.client_infos',
        'app.client_types',
        'app.company_types',
        'app.users',
        'app.client_contacts',
        'app.client_alert_settings',
        'app.alert_types',
        'app.device_alerts',
        'app.client_contact_devices',
        'app.client_device_geofences',
        'app.geofences',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_vehicles',
        'app.client_expenses',
        'app.expense_types',
        'app.client_trip_paths',
        'app.client_vehicle_assignments',
        'app.client_device_subscriptions',
        'app.account_types',
        'app.client_notifications',
        'app.notification_types',
        'app.client_publicids',
        'app.client_reports',
        'app.device_infos',
        'app.vehicle_types',
        'app.device_types',
        'app.trackers',
        'app.vehicle_models',
        'app.identification_types'
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
