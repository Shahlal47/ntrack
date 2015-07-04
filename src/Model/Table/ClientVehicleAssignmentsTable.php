<?php
namespace App\Model\Table;

use App\Model\Entity\ClientVehicleAssignment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientVehicleAssignments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $ClientVehicles
 * @property \Cake\ORM\Association\BelongsTo $ClientTrips
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 */
class ClientVehicleAssignmentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_vehicle_assignments');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('ClientVehicles', [
            'foreignKey' => 'client_vehicle_id'
        ]);
        $this->belongsTo('ClientTrips', [
            'foreignKey' => 'client_trip_id'
        ]);
        $this->belongsTo('ClientContacts', [
            'foreignKey' => 'client_contact_id'
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
            ->add('assignment_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('assignment_date');
            
        $validator
            ->add('start_time', 'valid', ['rule' => 'time'])
            ->allowEmpty('start_time');
            
        $validator
            ->add('finish_time', 'valid', ['rule' => 'time'])
            ->allowEmpty('finish_time');

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
        $rules->add($rules->existsIn(['client_vehicle_id'], 'ClientVehicles'));
        $rules->add($rules->existsIn(['client_trip_id'], 'ClientTrips'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        return $rules;
    }
}
