<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientContactsTable Test Case
 */
class ClientContactsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_contacts',
        'app.users',
        'app.user_types',
        'app.user_logs',
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
        'app.client_vehicles',
        'app.fuel_types',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_vehicle_assignments',
        'app.client_trips',
        'app.vehicle_models',
        'app.client_device_subscriptions',
        'app.account_types',
        'app.trackers',
        'app.client_contact_devices',
        'app.client_device_geofences',
        'app.geofences',
        'app.geofence_types',
        'app.client_expenses',
        'app.expense_types',
        'app.client_persons',
        'app.identification_types',
        'app.client_publicids',
        'app.client_notifications',
        'app.notification_types',
        'app.client_reports',
        'app.client_trip_paths'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientContacts') ? [] : ['className' => 'App\Model\Table\ClientContactsTable'];
        $this->ClientContacts = TableRegistry::get('ClientContacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientContacts);

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
