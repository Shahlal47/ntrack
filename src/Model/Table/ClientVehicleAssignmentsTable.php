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
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 * @property \Cake\ORM\Association\BelongsTo $ClientVehicles
 * @property \Cake\ORM\Association\BelongsTo $ClientTripPaths
 */
class ClientVehicleAssignmentsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('client_vehicle_assignments');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('ClientContacts', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->belongsTo('ClientVehicles', [
            'foreignKey' => 'client_vehicle_id'
        ]);
        $this->belongsTo('ClientTripPaths', [
            'foreignKey' => 'client_trip_path_id'
        ]);
    }

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
            
        $validator
            ->requirePresence('created_by', 'create')
            ->allowEmpty('created_by');
            
        $validator
            ->requirePresence('modified_by', 'create')
            ->allowEmpty('modified_by');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        $rules->add($rules->existsIn(['client_vehicle_id'], 'ClientVehicles'));
        $rules->add($rules->existsIn(['client_trip_path_id'], 'ClientTripPaths'));
        return $rules;
    }
}
