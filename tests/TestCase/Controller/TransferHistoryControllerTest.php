<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TransferHistoryController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TransferHistoryController Test Case
 */
class TransferHistoryControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transfer_history',
        'app.from_users',
        'app.from_client_infos',
        'app.to_users',
        'app.to_client_infos',
        'app.devices',
        'app.transfered_bies'
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
