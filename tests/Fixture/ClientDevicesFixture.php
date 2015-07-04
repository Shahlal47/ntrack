<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientDevicesFixture
 *
 */
class ClientDevicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'client_info_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'deviceid' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'imei' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'mob_no' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'speed_limit' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'minimum_mileage' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'maintenance_mileage' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fuel_consumption' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comments' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'device_info_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'vehicle_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => 'vehicle reg or person name', 'precision' => null, 'fixed' => null],
        'device_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'client_device_subscription_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'last subscription id', 'precision' => null, 'autoIncrement' => null],
        'tags' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => 'tags for searching', 'precision' => null, 'fixed' => null],
        'credit_file_num' => ['type' => 'string', 'fixed' => true, 'length' => 5, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tracker_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'vehicle_model_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'client_info_id' => '',
            'deviceid' => 'Lorem ipsum dolor ',
            'created' => '2015-07-04 05:37:04',
            'modified' => '2015-07-04 05:37:04',
            'active' => 1,
            'imei' => 'Lorem ipsum dolor sit amet',
            'mob_no' => 'Lorem ipsum dolor ',
            'speed_limit' => 1,
            'minimum_mileage' => 1,
            'maintenance_mileage' => 1,
            'fuel_consumption' => 1,
            'comments' => 'Lorem ipsum dolor sit amet',
            'device_info_id' => 1,
            'vehicle_type_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'device_type_id' => 1,
            'client_device_subscription_id' => 1,
            'tags' => 'Lorem ipsum dolor sit amet',
            'credit_file_num' => 'Lor',
            'tracker_id' => '',
            'vehicle_model_id' => 1
        ],
    ];
}
