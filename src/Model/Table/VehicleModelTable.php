<?php
namespace App\Model\Table;

use App\Model\Entity\VehicleModel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleModels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $VehicleTypes
 * @property \Cake\ORM\Association\HasMany $ClientDevices
 */
class VehicleModelTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('vehicle_model');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('VehicleTypes', [
            'foreignKey' => 'vehicle_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ClientDevices', [
            'foreignKey' => 'vehicle_model_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('desc', 'create')
            ->notEmpty('desc');

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
        $rules->add($rules->existsIn(['vehicle_type_id'], 'VehicleTypes'));
        return $rules;
    }
}
