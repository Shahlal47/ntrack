<?php
namespace App\Model\Table;

use App\Model\Entity\ClientVehicle;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientVehicles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $FuelTypes
 * @property \Cake\ORM\Association\BelongsTo $VehicleTypes
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $ClientDevices
 * @property \Cake\ORM\Association\HasMany $ClientDriverAssignments
 * @property \Cake\ORM\Association\HasMany $ClientVehicleAssignments
 */
class ClientVehiclesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_vehicles');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('FuelTypes', [
            'foreignKey' => 'fuel_type_id'
        ]);
        $this->belongsTo('VehicleTypes', [
            'foreignKey' => 'vehicle_type_id'
        ]);
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('ClientDevices', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->hasMany('ClientDriverAssignments', [
            'foreignKey' => 'client_vehicle_id'
        ]);
        $this->hasMany('ClientVehicleAssignments', [
            'foreignKey' => 'client_vehicle_id'
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
            ->requirePresence('registrtion_number', 'create')
            ->notEmpty('registrtion_number');
            
        $validator
            ->allowEmpty('vehicle_model');
            
        $validator
            ->allowEmpty('vehicle_color');
            
        $validator
            ->add('speed_limit', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('speed_limit');
            
        $validator
            ->add('fuel_tank_size', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('fuel_tank_size');
            
        $validator
            ->add('registration_expire_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('registration_expire_date');
            
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
        $rules->add($rules->existsIn(['fuel_type_id'], 'FuelTypes'));
        $rules->add($rules->existsIn(['vehicle_type_id'], 'VehicleTypes'));
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['client_device_id'], 'ClientDevices'));
        return $rules;
    }
}
