<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientContactDevicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientContactDevicesTable Test Case
 */
class ClientContactDevicesTableTest extends TestCase
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientContactDevices') ? [] : ['className' => 'App\Model\Table\ClientContactDevicesTable'];
        $this->ClientContactDevices = TableRegistry::get('ClientContactDevices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientContactDevices);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
