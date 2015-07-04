<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientNotificationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientNotificationsTable Test Case
 */
class ClientNotificationsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_notifications',
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
        'app.client_publicids',
        'app.client_vehicles',
        'app.client_driver_assignments',
        'app.client_drivers',
        'app.client_trip_paths',
        'app.client_vehicle_assignments',
        'app.client_reports',
        'app.notification_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientNotifications') ? [] : ['className' => 'App\Model\Table\ClientNotificationsTable'];
        $this->ClientNotifications = TableRegistry::get('ClientNotifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientNotifications);

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
