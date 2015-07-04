<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientAlertSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientAlertSettingsTable Test Case
 */
class ClientAlertSettingsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_alert_settings',
        'app.client_infos',
        'app.alert_types',
        'app.device_alerts',
        'app.client_contacts',
        'app.client_devices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientAlertSettings') ? [] : ['className' => 'App\Model\Table\ClientAlertSettingsTable'];
        $this->ClientAlertSettings = TableRegistry::get('ClientAlertSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientAlertSettings);

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
