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
        'app.client_infos',
        'app.users',
        'app.client_alert_settings',
        'app.alert_types',
        'app.device_alerts',
        'app.client_devices',
        'app.client_contact_devices',
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
