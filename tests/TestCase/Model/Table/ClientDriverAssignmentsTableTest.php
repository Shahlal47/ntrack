<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientDriverAssignmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientDriverAssignmentsTable Test Case
 */
class ClientDriverAssignmentsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_driver_assignments',
        'app.client_infos',
        'app.client_drivers',
        'app.client_contacts',
        'app.users',
        'app.client_alert_settings',
        'app.alert_types',
        'app.device_alerts',
        'app.client_devices',
        'app.device_infos',
        'app.vehicle_types',
        'app.device_types',
        'app.client_device_subscriptions',
        'app.account_types',
        'app.trackers',
        'app.vehicle_models',
        'app.client_contact_devices',
        'app.client_device_geofences',
        'app.geofences',
        'app.client_expenses',
        'app.client_persons',
        'app.client_publicids',
        'app.client_vehicles',
        'app.client_trip_paths',
        'app.client_vehicle_assignments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientDriverAssignments') ? [] : ['className' => 'App\Model\Table\ClientDriverAssignmentsTable'];
        $this->ClientDriverAssignments = TableRegistry::get('ClientDriverAssignments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientDriverAssignments);

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
