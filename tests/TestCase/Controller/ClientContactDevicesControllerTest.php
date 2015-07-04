<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ClientContactDevicesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ClientContactDevicesController Test Case
 */
class ClientContactDevicesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_contact_devices',
        'app.client_contacts',
        'app.client_infos',
        'app.users',
        'app.client_alert_settings',
        'app.alert_types',
        'app.device_alerts',
        'app.client_devices',
        'app.client_device_geofences',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_expenses',
        'app.client_trip_paths',
        'app.client_vehicle_assignments',
        'app.geofences'
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
