<?php
namespace App\Model\Table;

use App\Model\Entity\VehicleType;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $ClientDevices
 * @property \Cake\ORM\Association\HasMany $ClientVehicles
 * @property \Cake\ORM\Association\HasMany $VehicleModels
 */
class VehicleTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('vehicle_types');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('ClientDevices', [
            'foreignKey' => 'vehicle_type_id'
        ]);
        $this->hasMany('ClientVehicles', [
            'foreignKey' => 'vehicle_type_id'
        ]);
        $this->hasMany('VehicleModels', [
            'foreignKey' => 'vehicle_type_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->add('def_speed_limit', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('def_speed_limit');
            
        $validator
            ->add('def_min_mileage', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('def_min_mileage');
            
        $validator
            ->add('def_man_mileage', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('def_man_mileage');
            
        $validator
            ->add('def_fuel_consumption', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('def_fuel_consumption');

        return $validator;
    }
}
