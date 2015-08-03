<?php
namespace App\Model\Table;

use App\Model\Entity\ClientDevice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDevices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $DeviceInfos
 * @property \Cake\ORM\Association\BelongsTo $VehicleTypes
 * @property \Cake\ORM\Association\BelongsTo $DeviceTypes
 * @property \Cake\ORM\Association\BelongsTo $ClientDeviceSubscriptions
 * @property \Cake\ORM\Association\BelongsTo $Trackers
 * @property \Cake\ORM\Association\BelongsTo $VehicleModels
 * @property \Cake\ORM\Association\HasMany $ClientAlertSettings
 * @property \Cake\ORM\Association\HasMany $ClientContactDevices
 * @property \Cake\ORM\Association\HasMany $ClientDeviceGeofences
 * @property \Cake\ORM\Association\HasMany $ClientExpenses
 * @property \Cake\ORM\Association\HasMany $ClientPersons
 * @property \Cake\ORM\Association\HasMany $ClientPublicids
 * @property \Cake\ORM\Association\HasMany $ClientVehicles
 */
class ClientDevicesTable extends Table
{
//    public static function defaultConnectionName()
//    {
//        return 'db2';
//    }

    public function initialize(array $config)
    {
        $this->table('client_devices');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DeviceInfos', [
            'foreignKey' => 'device_info_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VehicleTypes', [
            'foreignKey' => 'vehicle_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DeviceTypes', [
            'foreignKey' => 'device_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ClientDeviceSubscriptions', [
            'foreignKey' => 'client_device_subscription_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Trackers', [
            'foreignKey' => 'tracker_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VehicleModels', [
            'foreignKey' => 'vehicle_model_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ClientAlertSettings', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientContactDevices', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientDeviceGeofences', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientExpenses', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientPersons', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientPublicids', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientVehicles', [
            'foreignKey' => 'client_device_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('deviceid', 'create')
            ->notEmpty('deviceid');
            
        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('active');
            
        $validator
            ->allowEmpty('imei');
            
        $validator
            ->allowEmpty('mob_no');
            
        $validator
            ->add('speed_limit', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('speed_limit');
            
        $validator
            ->add('minimum_mileage', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('minimum_mileage');
            
        $validator
            ->add('maintenance_mileage', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('maintenance_mileage');
            
        $validator
            ->add('fuel_consumption', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('fuel_consumption');
            
        $validator
            ->allowEmpty('comments');
            
        $validator
            ->allowEmpty('name');
            
        $validator
            ->allowEmpty('tags');
            
        $validator
            ->allowEmpty('credit_file_num');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['device_info_id'], 'DeviceInfos'));
        $rules->add($rules->existsIn(['vehicle_type_id'], 'VehicleTypes'));
        $rules->add($rules->existsIn(['device_type_id'], 'DeviceTypes'));
        $rules->add($rules->existsIn(['client_device_subscription_id'], 'ClientDeviceSubscriptions'));
        $rules->add($rules->existsIn(['tracker_id'], 'Trackers'));
        $rules->add($rules->existsIn(['vehicle_model_id'], 'VehicleModels'));
        return $rules;
    }
}
