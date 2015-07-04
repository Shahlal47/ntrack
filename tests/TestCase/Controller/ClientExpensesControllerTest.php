<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ClientExpensesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ClientExpensesController Test Case
 */
class ClientExpensesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_expenses',
        'app.client_infos',
        'app.expense_types',
        'app.client_devices',
        'app.device_infos',
        'app.vehicle_types',
        'app.device_types',
        'app.client_device_subscriptions',
        'app.account_types',
        'app.trackers',
        'app.vehicle_models',
        'app.client_alert_settings',
        'app.alert_types',
        'app.device_alerts',
        'app.client_contacts',
        'app.users',
        'app.client_contact_devices',
        'app.client_device_geofences',
        'app.geofences',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_vehicles',
        'app.client_trip_paths',
        'app.client_vehicle_assignments',
        'app.client_persons',
        'app.client_publicids'
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
