<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientPublicidsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientPublicidsTable Test Case
 */
class ClientPublicidsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_publicids',
        'app.client_infos',
        'app.client_types',
        'app.company_types',
        'app.users',
        'app.client_contacts',
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
        'app.expense_types',
        'app.client_persons',
        'app.identification_types',
        'app.client_vehicles',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_trip_paths',
        'app.client_vehicle_assignments',
        'app.client_notifications',
        'app.notification_types',
        'app.client_reports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientPublicids') ? [] : ['className' => 'App\Model\Table\ClientPublicidsTable'];
        $this->ClientPublicids = TableRegistry::get('ClientPublicids', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientPublicids);

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
